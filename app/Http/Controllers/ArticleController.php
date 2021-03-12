<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ArticleController extends Controller
{
    public function index(){
        return Article::all();
    }

    public function show(Article $article){
        return $article;
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return $article;
    }

    public function update(Request $request, Article $article){
        $article->update($request->all());
        return $article;
    }

    public function delete(Request $request, Article $article){
        $article->delete();
        return response()->json(null,204); //indica no content
}
}
