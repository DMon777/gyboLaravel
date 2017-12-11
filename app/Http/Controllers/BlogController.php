<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Categories;
use App\Tags;
use DB;
use Symfony\Component\HttpKernel\Tests\DependencyInjection\ArgumentWithoutTypeController;

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

    }
}
