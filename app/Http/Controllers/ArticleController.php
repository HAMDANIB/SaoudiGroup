<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;


class ArticleController extends Controller
{
    public function index()
    {
        $Datas=article::all();
        // return view('articles',compact('Datas'));
        return view('index',compact('Datas'));


    }
}
