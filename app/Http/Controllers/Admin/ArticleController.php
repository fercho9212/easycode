<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
  public function view($id){
    $article=Article::find($id);
    $article->category;
    $article->user;
    $article->tags;

    dd($article);
  }
}
