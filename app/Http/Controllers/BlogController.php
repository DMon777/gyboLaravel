<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Http\Requests\BlogValidator;
use function foo\func;
use Illuminate\Http\Request;
use App\Articles;
use App\Categories;
use App\Tags;
use DB;
use Gate;

class BlogController extends Controller
{
    public function actionBlog(Request $request)
    {
        $title = "Blog";
        if(!empty($request->search)){

            $search_data = Articles::where('name','like',"%$request->search%")
                ->where('text','like',"%$request->search%")
                ->get();

//            if(!empty($search_data[0])) {
//               dump($search_data);
//            }
//            else echo "ничего не найдено!!";

            $title = 'результаты поиска';
            return view('search_page',['title' => $title,'search_data' => $search_data]);
        }

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
      // $comments = $article->comments;

        $count_comments = Comments::where('article_id','=',$id)->count();

        $comments = $this->getComments($id);


        return view('article_detail_page',
            [
                'title' => $title,
                'article' => $article,
                'comments' => $comments,
                'count_comments' => $count_comments,
            ]);
    }

    private function getComments($article_id,$parent_id = 0)
    {
        $comments = Comments::where('article_id','=',$article_id)
                    ->where('parent_id','=',$parent_id)
                    ->get();
//        $comments = DB::table('comments')->select('*')->where('article_id','=',$article_id)
//            ->where('parent_id','=',$parent_id)->get();

        $map = [];
        if(!empty($comments)) {
            foreach ($comments as $comment) {
                $comment->children = $this->getComments($article_id,$comment->id);
                $map[] = $comment;
            }
        }

        return $map;
    }

    public function addComment(Request $request,$id)
    {

        $model = new Comments();
        $model->login = $request->login;
        $model->email = $request->email;
        $model->comment = $request->message;
        $model->article_id = $id;
        $model->parent_id  = $request->parent_id;
        $model->date = time();

        $rules = [
            'login' => 'required|max:15',
            'email' => 'required|email',
            'message' => 'required'
        ];

        $messages = [
            'required' => 'поле :attribute обязательно для заполнения!',
            'email' => 'поле :attribute должно соответствовать email адресу',
            'login.max' => 'максимально допустимое количество сиволов для поля :attribute - :max'
        ];

        $this->validate($request,$rules,$messages);

        $model->save();
        return redirect()->back();

    }

    public function viewAdminArticles ()
    {
        $articles = Articles::paginate(3);

        return view('admin.pages.articles',['articles' => $articles]);
    }

    public function viewUpdateArticle($id)
    {
        $categories = Categories::all();
        $article = Articles::find($id);

        $tags = Tags::all();
        return view ('admin.pages.article',[
            'article' => $article,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    public function updateArticle (Request $request,$id)
    {
        $model = Articles::find($id);
//        if(Gate::denies('delete-article',$model)){
//            return redirect()->back()->with('message','Для того чтобы редактировать статьи вы должны быть
//            администратором или автором статьи!');
//        }
        $model->name = $request->name;
        $model->intro = $request->intro;
        $model->text = $request->text;
        $model->image = $request->img;
        $model->category_id = $request->category;


        if($request->hasFile('img')) {
            $file = $request->file('img');

            $img_name = $file->getClientOriginalName();

            $file->move(public_path().'/assets/images/blog/',$img_name);
            $model->image = $img_name;
        } else {
            $model->image = $request->old_img;
        }

        $model->tags()->detach($model->tags);
        $model->tags()->attach($request->tags);

        if($model->save()) {
            return redirect()->back()->with('message','данные обновлены!');
        } else {
            return redirect()->back()->with('message','при обновлении произошла ошибка!');
        }

    }

    public function viewAddArticle ()
    {
        $categories = Categories::all();
        $tags = Tags::all();

        return view ('admin.pages.add_article',[
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    public function addArticle(BlogValidator $request)
    {
        $author_id = $request->user()->id;
        $model = new Articles();

        $model->name = $request->name;
        $model->intro = $request->intro;
        $model->text = $request->text;

        $model->category_id = $request->category;
        $model->author_id = $author_id;
        $model->date = time();

        if($request->hasFile('image')) {
            $file = $request->file('image');

            $img_name = $file->getClientOriginalName();

            $file->move(public_path().'/assets/images/blog/',$img_name);
            $model->image = $img_name;
        }

        if($model->save()) {
            $model->tags()->attach($request->tags);
            return redirect()->back()->with('message','Статья добавлена!');
        } else {
            return redirect()->back()->with('message','при добавлении произошла ошибка!');
        }
    }

    public function deleteArticle($id)
    {

        $model = Articles::find($id);

        if(Gate::denies('delete-article',$model)){
            return redirect()->back()->with('message','Для того чтобы удалять статьи вы должны быть 
            администратором или автором статьи!');
        }


        $article_name = $model->name;
        $model->tags()->detach($model->tags);
        $model->comments()->delete();
        if($model->delete()){
            return redirect()->back()->with('message','статья - '. $article_name .' удалена!!!');
        }
    }

}
