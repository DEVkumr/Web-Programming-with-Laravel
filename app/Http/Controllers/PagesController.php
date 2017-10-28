<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function college_page(){
        return view('pages.college_page');
    }
    public function hostel_page(){
        return view('pages.hostel_page');
    }
    public function news(){
        return view('pages.news');
    }
    public function events(){
        return view('pages.events');
    }
    public function about_vit(){
        return view('pages.about_vit');
    }
}
