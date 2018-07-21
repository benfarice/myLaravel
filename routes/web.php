<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	/*
	Schema::create('programmers',function($myTable){
		$myTable -> increments('id');
		$myTable -> string('name');//255 by default
		$myTable -> string('lastname',30);
		$myTable -> string('description',500);
		$myTable -> string('age');
		$myTable -> date('created');
		$myTable -> timestamps();

	});
	*/
	/*
	Schema::table('programmers',function($myTable){
		$myTable -> dropColumn('age');
		$myTable -> string('fullname');
		

	});
	*/


	$coders = new App\coders;

	$coders->name = "Imzoughene";
	$coders->lastname="Youssef";
	$coders->description="PHP programmer";
	//$coders->fullname="imzoughene youssef";
	$coders->save();
    return view('welcome');
});
Route::get('about', function () {
    return "welcome to about page";
});

Route::get('about/me', function () {
    return "welcome to about/me page";
});

Route::get('about/{myVariable}', function ($myVariable) {
    return "welcome to $myVariable var page";
});
