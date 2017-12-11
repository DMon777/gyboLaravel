<?php
/**
 * Created by PhpStorm.
 * User: Димон
 * Date: 11.12.2017
 * Time: 15:12
 */

namespace App\Repositories;
use App\Categories;
use App\Tags;
use App\Articles;


class SidebarRep
{

    public function getSidebar()
    {
        $categories = Categories::orderBy('order')->get();
        $tags = Tags::all();
        $recent_posts = Articles::orderBy('date','desc')->limit(3)->get();

        $sidebar =  view('frontend.blog_sidebar',[
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts
        ])->render();
        echo $sidebar;

    }


}