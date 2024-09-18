<?php

use App\Http\Controllers\Landing\AnnouncementController;
use App\Http\Controllers\Landing\CommunityController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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

        // Sarana & Prasarana
        Route::view('/sarana-prasarana', 'landing.about.facility')->name('facility');

    // Informasi
        // Berita
        Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
        Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('news.show');

        // Pengumuman
        Route::get('/pengumuman', [AnnouncementController::class, 'index'])->name('announcement.index');
        Route::get('/pengumuman/{slug}', [AnnouncementController::class, 'show'])->name('announcement.show');

        // Pengabdian Masyarakat
        Route::get('/pengabdian-masyarakat', [CommunityController::class, 'index'])->name('community.index');
        Route::get('/pengabdian-masyarakat/detail/pengabdian-masyarakat-detail', [CommunityController::class, 'show'])->name('community.show');


});
 
