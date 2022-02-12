<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ArticleRequest;

session_start();
class ArticleController extends Controller
{
    public function showArticles()
    {
        $articles = Article::paginate(7);
        return view('articleList', ['articles' => $articles]);
    }
    public function showOneArticle($id)
    {
        $art = DB::table('articles')
            ->select('id', 'name', 'details', 'user_id')
            ->where('id', '=', $id)
            ->first();
        //return (Article::find($id)->articleCategory);
        return view('viewArticle', ['articles' => $art, 'category' => Article::find($id)->articleCategory]);
    }
    public function createArticle()
    {
        return view('createArticle');
    }
    public function saveArticle(ArticleRequest $request)
    {
        $validated = $request->validated();

        // Retrieve a portion of the validated input data...
        $validated = $request
            ->safe()
            ->only(['name', 'details', 'slug', 'user_id', 'is_used']);
        if ($validated) {
            $article = new Article();
            $article->name = $request->name;
            $article->details = $request->details;
            $article->slug = $request->slug;
            $article->user_id = $request->user_id;
            $article->is_used = $request->is_used;
            $article->save(); // INSERT INTO TABLE

            return redirect()->route('article.list');
        }
        // save new category
    }
    public function deleteArticle($id)
    {
        Article::where('id', $id)->delete();

        return redirect()->route('article.list');
    }
    public function updateArticle($id)
    {
        $_SESSION['id'] = $id;
        return view('updateArticle');
    }
    public function updateArt(ArticleRequest $request)
    {

        $validated = $request->validated();

        // Retrieve a portion of the validated input data...
        $validated = $request
            ->safe()
            ->only(['name', 'details', 'slug', 'user_id', 'is_used']);
        if ($validated) {

            $art = Article::find($_SESSION['id']);

            $art->name = $request->updateName;
            $art->details = $request->updateDetails;
            $art->slug = $request->updateSlug;
            $art->user_id = $request->updateUser_id;
            $art->is_used = $request->updateIs_used;

            $art->save();

            return redirect()->route('article.list');
        }
        // save new category
    }
}