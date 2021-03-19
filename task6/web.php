<?php

use Illuminate\Support\Facades\Route;

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

//chuong 4 video 1
Route::get('home','HomeController@showWelcome');
//chuong 4 video 2
Route::get('about','AboutController@showDetails');
//chuong 4 video 3
Route::get('about/{thesubject}','AboutController@showSubject');
Route::get('/', function () {
    return view('welcome');
});
//chuong 3 video 2
//Route::get('about',function(){
//    return 'About Content';
//});
//chuong 3 video 3
Route::get('about/direction',function (){
    return 'Direction go here ';
});
//chuong 3 video 4
Route::any('submit-form',function (){
    return 'Process form';
});

Route::get('about/{theSubject}',function ($theSubject){
    return $theSubject . 'content goes here';
});

//chuong 3 video 5,6
Route::any('buy/{Price}/{Art}',function($Price,$Art){
    return $Price . ' is the price when you buy ' . $Art;
});

//chuong 3 video 7
 Route::get('where',function(){
     return Redirect::to('about/direction');
 });
