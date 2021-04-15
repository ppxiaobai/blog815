<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // 网站首页
    public function index()
    {

        return view('posts.index');
    }
}
