<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Отображение главной страницы
    public function index()
    {
        // 6 статей
        $articles = Article::latest()->take(6)->get();

        // Возвращаем вид с переданными данными
        return view('home', compact('articles'));
    }

    // Метод для отображения каталога статей
    public function catalog()
    {
        // Все статьи (10 на страницу)
        $articles = Article::latest()->paginate(10);
          return view('articles.catalog', ['articles' => $articles]);
    }

    // Метод для отображения конкретной статьи
   public function show(Article $article)
   {
       $article->increment('views');
       return view('articles.show', compact('article'));
   }

}

