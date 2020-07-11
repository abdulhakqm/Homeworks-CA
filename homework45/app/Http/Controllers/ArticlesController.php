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

    public function create() {
        return view('articles.create');
    }

    public function store(){
        Article::create(
            request()->validate([
                'title' => 'required|min:3',
                'excerpt' => 'required',
                'body' => ['required', 'max:255']
            ])
        );
        return redirect('/');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('articles.edit', ['article'=>$article] );
    }

    public function update(Article $article){

        $article->update($this->validateArticle());
        
        return redirect('/');
    }

    private function validateArticle() {
        return request()->validate([
            'title' => 'required|min:3',
            'excerpt' => 'required',
            'body' => ['required', 'max:255']
        ]);
    }

}
