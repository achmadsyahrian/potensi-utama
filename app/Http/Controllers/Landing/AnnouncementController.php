<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index(Request $request)
    {
        // Ambil nilai dari query string
        $search = $request->input('search');
        $category = $request->input('category');
        $tag = $request->input('tag');

        // Query untuk mengambil data berdasarkan kategori, tag, dan pencarian judul
        $query = Post::with('user', 'category', 'tags')
            ->where('type', 'announcement')
            ->where('is_published', 1)
            ->orderBy('created_at', 'desc');

        // Tambahkan filter kategori terlebih dahulu
        if ($category) {
            $query->whereHas('category', function ($q) use ($category) {
                $q->where('slug', $category);
            });
        }

        // Kemudian tambahkan filter tag
        if ($tag) {
            $query->whereHas('tags', function ($q) use ($tag) {
                $q->where('slug', $tag);
            });
        }

        // Terakhir, tambahkan filter pencarian berdasarkan judul
        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }

        // Ambil data dengan paginasi
        $data = $query->paginate(8);
        $data->appends([
            'search' => $search,
            'category' => $category,
            'tag' => $tag,
        ]);

        // Ambil data terbaru
        $dataRecent = Post::with('user', 'category')
            ->where('type', 'announcement')
            ->where('is_published', 1)
            ->orderBy('updated_at', 'desc')
            ->take(5)
            ->get();

        // Ambil semua tags
        $tags = Tag::all();

        return view('landing.information.announcement.index', compact('data', 'dataRecent', 'tags'));
    }


    public function show($slug) {
        $post = Post::with('category', 'user')->where('slug', $slug)->firstOrFail();

        $dataRecent = Post::with('user', 'category')
                        ->where('type', 'announcement')
                        ->where('is_published', 1)
                        ->orderBy('updated_at', 'desc')
                        ->take(5)
                        ->get();
                        
        $tags = Tag::all();

        return view('landing.information.announcement.detail', compact('post', 'dataRecent', 'tags'));
    }

    public function showByCategory($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        
        $post = Post::with('category', 'user')->where('category_id', $category->id)->firstOrFail();

        $dataRecent = Post::with('user', 'category')
                        ->where('type', 'announcement')
                        ->where('is_published', 1)
                        ->orderBy('updated_at', 'desc')
                        ->take(5)
                        ->get();
                        
        $tags = Tag::all();

        return view('landing.information.announcement.detail', compact('post', 'dataRecent', 'tags'));
    }


}
