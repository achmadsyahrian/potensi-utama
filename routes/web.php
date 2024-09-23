<?php

use App\Http\Controllers\Landing\AnnouncementController;
use App\Http\Controllers\Landing\CommunityController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\NewsController;
use App\Models\Research;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'));
});


Route::group(['namespace' => 'Landing', 'as' => 'landing.'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Tentang Upu
        // Sejarah
        Route::view('/sejarah', 'landing.about.history')->name('history');

        // Visi Misi
        Route::view('/visi-misi', 'landing.about.purpose')->name('purpose');

        // Akreditasi
        Route::view('/akreditasi', 'landing.about.accreditation')->name('accreditation');

        // Fasilitas
        Route::view('/fasilitas', 'landing.about.facility')->name('facility');

    // Informasi
        // Berita
        Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
        Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('news.show');

        // Pengumuman
        Route::get('/pengumuman', [AnnouncementController::class, 'index'])->name('announcement.index');
        Route::get('/pengumuman/{slug}', [AnnouncementController::class, 'show'])->name('announcement.show');

    // Akademik
        // Pengabdian Masyarakat
        Route::get('/pengabdian-masyarakat', [CommunityController::class, 'index'])->name('community.index');
        Route::get('/pengabdian-masyarakat/{slug}', [CommunityController::class, 'show'])->name('community.show');

        // Penelitian
        Route::get('/penelitian', function(){
            $data = Research::find(1);
            return view('landing.research.index', compact('data'));
        })->name('research.index');


});
 
