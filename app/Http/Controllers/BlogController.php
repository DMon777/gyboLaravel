<?php

namespace App\Http\Controllers;

use App\Comments;
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
        $articles = Articles::join('articles_tags','articles.id','=','articles_tags.article_id')
            ->where('articles_tags.tag_id','=',$tag[0]->id)
            ->paginate(3);


        return view('blog_page',[
            'title' => $title,
            'articles' => $articles,
        ]);
    }

    public function actionArticle($id)
    {

        $article = Articles::find($id);
        $title = $article->name;
      //  $comments = Comments::where('article_id','=',$id)->get();
        $comments = $article->comments;

        return view('article_detail_page',
            [
                'title' => $title,
                'article' => $article,
                'comments' => $comments
            ]);
    }

    public function addComment(Request $request,$id)
    {

        $model = new Comments();
        $model->login = $request->login;
        $model->email = $request->email;
        $model->comment = $request->message;
        $model->article_id = $id;
        $model->date = time();
        $model->save();
        return redirect()->back();

    }


}
