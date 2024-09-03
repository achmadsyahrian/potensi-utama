<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index() {
        return view('landing.information.announcement.index');
    }

    public function show() {
        return view('landing.information.announcement.detail');
    }
}
