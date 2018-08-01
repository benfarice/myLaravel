<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Requests\ArticlesRequest;
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

    public function create(){
    	return view('articles.create');
    }

    public function store(ArticlesRequest $request){
        //return Request::all();
        \App\Article::create(Request::all());
        return redirect('mvc');
    }
}
