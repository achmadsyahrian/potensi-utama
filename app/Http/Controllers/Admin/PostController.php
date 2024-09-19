<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/posts/content/files', $filename);
    
        return response()->json(['url' => Storage::url($path)]);
    }

    public function destroyAllFiles($postId)
    {
        
        $post = Post::findOrFail($postId);
        $files = $post->files;

        foreach ($files as $file) {
            Storage::delete(str_replace('/storage', 'public', $file->file_path));
            $file->delete();
        }

        return redirect()->back()->with('success', 'Files tambahan berhasil dihapus.');
    }

}
