<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('index');
    }

    public function articles(){
        return view('articles');
    }
}
