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

      //  $articles = DB::table('articles')->paginate(3);
        $articles = Articles::paginate(3);

        return view('blog_page',[
                'title' => $title,
                'articles' => $articles,
            ]);
    }

    public function actionArticlesByCat($catId)
    {
        $category = Categories::find($catId);
        $articles = Articles::where('category_id','=',$catId)->paginate(3);


        $title = $category->name;

        return view('blog_page',[
            'title' => $title,
            'articles' => $articles,
        ]);

    }

    public function actionArticlesByTagName($tagName)
    {

        $tag = Tags::where('link','=',$tagName)->get();
        $title = $tag[0]->name;
        // SELECT * FROM articles JOIN articles_tags ON articles.id = articles_tags.article_id
        // WHERE articles_tags.tag_id = 2
//        $articles = DB::table('articles')
//            ->Join('articles_tags','articles.id','=','articles_tags.article_id')
//            ->where('articles_tags.tag_id','=',$tag[0]->id)
//            ->get();
        $articles = Articles::join('articles_tags','articles.id','=','articles_tags.article_id')
            ->where('articles_tags.tag_id','=',$tag[0]->id)
            ->paginate(3);


        return view('blog_page',[
            'title' => $title,
            'articles' => $articles,
        ]);
    }
}
