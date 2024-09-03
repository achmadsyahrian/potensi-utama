<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        return view('landing.information.news.index');
    }

    public function show() {
        return view('landing.information.news.detail');
    }
}
