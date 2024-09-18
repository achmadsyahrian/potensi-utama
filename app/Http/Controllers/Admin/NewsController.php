<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil input pencarian
        $search = $request->input('search');
        
        // Query builder dengan kondisi pencarian
        $data = Post::with('user')->where('type', 'news')
                    ->when($search, function ($query, $search) {
                        return $query->where('title', 'like', "%{$search}%");
                    })
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);

        // Kirim data ke view
        return view('admin.news.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.news.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:posts,slug',
            'category_id' => 'required|exists:categories,id',
            'tags_id' => 'array|exists:tags,id',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'nullable|boolean',
            'content' => 'required|string',
        ]);

        // Simpan thumbnail
        $thumbnailUrl = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailPath = $thumbnail->store('public/posts/thumbnails');
            $thumbnailUrl = Storage::url($thumbnailPath);
        }

        // Simpan berita
        $post = new Post();
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->thumbnail = $thumbnailUrl;
        $post->content = $request->input('content');
        $post->is_published = $request->input('is_published', 0);
        $post->user_id = auth()->user()->id;
        $post->save();

        // Simpan tags
        $post->tags()->sync($request->input('tags_id', []));

        return redirect()->route('admin.news.index')->with('success', "Berita '{$request->input('title')}' berhasil ditambah!");
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('admin.news.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::with('tags', 'category')->find($id);
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.news.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        
        // Validasi data
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => ['required', 'string', Rule::unique('posts')->ignore($post->id)],
            'category_id' => 'required|exists:categories,id',
            'tags_id' => 'array|exists:tags,id',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'nullable|boolean',
            'content' => 'required|string',
        ]);

        // Simpan thumbnail jika ada
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailPath = $thumbnail->store('public/posts/thumbnails');
            $thumbnailUrl = Storage::url($thumbnailPath);

            // Hapus thumbnail lama jika ada
            if ($post->thumbnail) {
                Storage::delete(str_replace('/storage', 'public', $post->thumbnail));
            }
            
            $post->thumbnail = $thumbnailUrl;
        }

        // Data Lama
        $oldTitle = $post->title;
        
        // Update data post
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->content = $request->input('content');
        $post->is_published = $request->input('is_published', 0);
        $post->user_id = $post->user_id;
        $post->save();

        // Sinkronisasi tags
        $post->tags()->sync($request->input('tags_id', []));

        return redirect()->route('admin.news.index')->with('success', "Berita '{$oldTitle}' berhasil diperbarui!");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan post berdasarkan ID
        $post = Post::find($id);
        
        // Pastikan post ditemukan
        if (!$post) {
            return redirect()->route('admin.news.index')->with('error', 'Berita tidak ditemukan.');
        }

        // Hapus file thumbnail jika ada
        if ($post->thumbnail) {
            $thumbnailPath = str_replace('/storage', 'public', $post->thumbnail); // Ubah path ke path public
            if (Storage::exists($thumbnailPath)) {
                Storage::delete($thumbnailPath);
            }
        }

        // Hapus file dari konten
        $this->deleteFilesFromContent($post->content);

        // Hapus post
        $post->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil dihapus.');
    }

    private function deleteFilesFromContent($content)
    {
        // Gunakan regex untuk mencari semua URL gambar dalam konten
        preg_match_all('/src="\/storage\/posts\/content\/files\/(.*?)"/', $content, $matches);

        // Loop melalui semua file yang ditemukan
        foreach ($matches[1] as $file) {
            $filePath = 'public/posts/content/files/' . $file;
            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }
    }

}
