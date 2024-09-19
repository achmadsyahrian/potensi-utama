<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $news = Post::where('type', 'news')
            ->where('is_published', 1)
            ->orderBy('created_at', 'desc')
            ->take(4) 
            ->get();

        $announcements = Post::with('category', 'tags')
            ->where('type', 'announcement')
            ->where('is_published', 1)
            ->orderBy('created_at', 'desc')
            ->take(3) 
            ->get();
    
        // Kembalikan data ke view
        return view('landing.index', compact('news', 'announcements'));
    }
    
}
