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

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/welcome', function () {
        return 'Chào mừng các bạn đã đến với codealltheworld.com';
    });

Route::get('/insert',function(){
    DB::insert('insert into posts(title,body) values(?,?)',['PHP with laravel','Laravel is the best framework']);
    return "Done";
});

Route::get('/read',function (){
    $result = DB::select('select * from posts where id = ?',[1]);
//    return $result;
    foreach ($result as $posts){
        return $posts->title;
    }
});
Route::get('update',function (){
    $updated = DB::update('update posts set title = "New title" where id > ?',[1]);
    return $updated;
});

     Route::get('/readAll',function (){
         $posts = \App\Models\Post::all();
         foreach ($posts as $p){
             echo $p->title;
             echo '<br>';
         }
     });
