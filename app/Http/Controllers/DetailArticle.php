<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class DetailArticle extends Controller
{
    public function index() {
        return view('pages.article-detail');
    }

    public function show(Article $article){


        return view('pages.article-detail', compact('article'));
    }
}
