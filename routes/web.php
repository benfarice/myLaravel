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
	$coders =  App\coders::find(1);
	$coders->name = "fouaji";
	$coders->save();
	return $coders->name;
	*/

	/*
	Schema::table('programmers',function($myTable){
		$myTable -> dropColumn('age');
		$myTable -> string('fullname');
		

	});
	*/

	/*
	$coders = new App\coders;

	$coders->name = "Imzoughene";
	$coders->lastname="Youssef";
	$coders->description="PHP programmer";
	//$coders->fullname="imzoughene youssef";
	$coders->save();
	*/
    return view('welcome');
    //return view('hello');
/*
$student_names = array('abd el aziz','abd el hamid','mohamed','malika','rachid');

    return view('welcome',array('country'=>'Morocco','city'=>'Casablanca','job'=>'developer','student_names'=>$student_names));
*/
});
Route::get('about', function () {
    return "welcome to about page";
});


Route::get('soukaina',"pagesController@soukaina");
Route::get('oussama',"pagesController@oussama");


Route::get('mvc',
	"ArticlesController@index");


Route::get('mvc/create',
	"ArticlesController@create");


Route::post('mvc',
	"ArticlesController@store");

Route::get('mvc/{id}',
	"ArticlesController@show");


Route::get('signup', function () {
    return view("signup");
});

Route::get('register', function () {
    return view("register");
});

Route::post('thanks', function () {
    

	$yourEmail = Input::get('email');
    return view("thanks")->with('yourEmail',$yourEmail);
});



Route::get('about/me', function () {
    return "welcome to about/me page";
});

Route::get('about/{myVariable}', function ($myVariable) {
    return "welcome to $myVariable var page";
});
