<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('index');
    }
    
    public function allArticles(){

        return view('article.index')
         ->with('articles',Article::orderBy('updated_at','DESC')->get());
    }
}
