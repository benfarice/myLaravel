<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
    	$articles = \App\Article::all();
    	//return $articles;
    	return view('articles.index',compact('articles'));
    }


    public function show($id){
    	$acrticle = \App\Article::find($id);
    	return view('articles.show',compact('acrticle'));
    }
}
