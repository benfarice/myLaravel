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
