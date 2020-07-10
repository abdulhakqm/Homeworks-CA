<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    //
    public function index(){
        $articles = Article::all();
        return view('welcome' , ['articles'=>$articles]);
    }
    public function show($id){
        $article = Article::findOrFail($id);
        return view('articles.show',['article'=>$article]);
    }
}
