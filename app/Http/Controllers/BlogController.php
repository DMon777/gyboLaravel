<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function actionBlog()
    {

        $title = "Blog";

        return view('blog_page',['title' => $title]);
    }
}
