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

Route::get('/task', function () {
    $data=App\Task::all();
    return view('task')->with('tasks',$data);
});

Route::post('/savetask','taskcontroller@store');

Route::get('/mark/{id}','taskcontroller@updatetask');
Route::get('/marknot/{id}','taskcontroller@updatenottask');
Route::get('/deletetask/{id}','taskcontroller@deletetask');
Route::get('/updatethetask/{id}','taskcontroller@utask');
Route::post('/updated/{id}','taskcontroller@updateupdate');