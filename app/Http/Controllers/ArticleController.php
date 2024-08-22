<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //главная страница
    public function index()
    {
        // 6 статей
        $articles = Article::latest()->take(6)->get();

        return view('home', compact('articles'));
    }


    public function catalog()
    {
        // Все статьи
        $articles = Article::latest()->paginate(10);
          return view('articles.catalog', ['articles' => $articles]);
    }

   public function show(Article $article)
   {
       $article->increment('views');
       return view('articles.show', compact('article'));
   }

}

