<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function soukaina(){
    	//return "soukaina is a friend";
    	$nom = "fatim zahra";
    	//return view("friends.soka")->with("other_friend",$nom);
    	/*return view("friends.soka",[
    		"nom"=>"meriem",
    		"age"=>25
    	]);*/
    	$data=[];
    	$data['nom']="aarab";
    	$data['prenom']="anas";
    	//return view("friends.soka",$data);

    	$name = "nouhaila";
    	$familyname="daurghal";
    	return view("friends.soka",compact("name","familyname"));
    }
}
