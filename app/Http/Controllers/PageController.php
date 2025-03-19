<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() { return view('welcome'); }
    public function services() { return view('pages.services'); }
    public function contact() { return view('pages.contact'); }
    public function blog() { return view('pages.blog'); }
    public function about() { return view('pages.about'); }
    public function backoffice() { return view('admin.dashboard'); }
}
