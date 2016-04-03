<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{

    /**
     * ArticleController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth',['only '=>'create']);
    }

    public function index(Article $request)
    {
        $title = 'Блог';
        $articles  = Article::all();
        return view('blog',compact('articles','title'));
    }

    public function show($id)
    {

        $article  = \App\Article::with('user')->findOrFail($id);
        $title = $article->name;
        return view('articles.article',compact('title','article'));

    }

    public function create()
    {
        return 'create an article';
    }


}
