<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Categories;
use App\Tags;
use DB;

class BlogController extends Controller
{
    public function actionBlog()
    {

        $title = "Blog";

        $articles = DB::table('articles')->paginate(3);
        $categories = Categories::orderBy('order')->get();
        $tags = Tags::all();
        $recent_posts = Articles::orderBy('date','desc')->limit(3)->get();


        return view('blog_page',[
                'title' => $title,
                'articles' => $articles,
                'categories' => $categories,
                'tags' => $tags,
                'recent_posts' => $recent_posts
            ]);
    }
}
