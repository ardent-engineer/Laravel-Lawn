<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('lawn.Index');
    }
    public function about(){
        return view('lawn.About');
    }
    public function services(){
        return view('lawn.Services');
    }
}
