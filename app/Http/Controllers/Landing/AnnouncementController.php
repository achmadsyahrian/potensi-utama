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
        $title = __('partials/navbar.navbar.announcement');
        $route = "landing.announcement";
        
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

        // Mendapatkan bahasa aktif dari aplikasi
        $lang = app()->getLocale();

        // Terakhir, tambahkan filter pencarian berdasarkan judul sesuai dengan bahasa aktif
        if ($search) {
            $query->where(function($query) use ($search, $lang) {
                if ($lang === 'en') {
                    // Pencarian menggunakan title_en untuk bahasa Inggris
                    $query->where('title_en', 'like', '%' . $search . '%');
                } else {
                    // Pencarian menggunakan title untuk bahasa lainnya (misalnya Bahasa Indonesia)
                    $query->where('title', 'like', '%' . $search . '%');
                }
            });
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

        return view('landing.posts.index', compact('data', 'dataRecent', 'tags', 'title', 'route'));
    }


    public function show($slug) {
        $title = __('partials/navbar.navbar.announcement');
        $route = "landing.announcement";

        $post = Post::with('category', 'user')->where('slug', $slug)->firstOrFail();
        $dataRecent = Post::with('user', 'category')
                        ->where('type', 'announcement')
                        ->where('is_published', 1)
                        ->orderBy('updated_at', 'desc')
                        ->take(5)
                        ->get();
                        
        $tags = Tag::all();

        return view('landing.posts.detail', compact('post', 'dataRecent', 'tags', 'title', 'route'));
    }

}
