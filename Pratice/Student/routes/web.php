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
use Illuminate\Http\Request;
use App\Models\studentinfo;

//Display student
Route::get('/student', function () {
    $student = studentinfo::orderBy('created_at', 'desc')->get();
     return view('student',['student' => $student]);

});
//Add student
Route::post('/student',function (Request $rq){
    $task = new \App\Models\studentinfo();
    $task->name = $rq->name;
    $task->Age = $rq->Age;
    $task->address = $rq->address;
    $task->telephone = $rq->telephone;
    $task->save();
    return redirect('/student');

});
