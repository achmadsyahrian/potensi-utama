<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index() {
        return view('landing.information.community.index');
    }

    public function show() {
        return view('landing.information.community.detail');
    }
}
