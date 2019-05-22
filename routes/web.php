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
Route::get('/tasks', function () {
  $data=App\Task::all();
  return view('tasks')->with('tasks',$data);
});


 Route::get('/login', function(){
     echo 'hiiiiiiiiiiiii';
 });

 //Route::get('/about', function(){
 //return view('about');  
 //});

//Route:: view('/','about');
//Route::get('about/{id}', function($id){
  //   return $id;

//});
 
Route::post('/SaveTask','TaskController@SaveTask');
Route::get('/taskhascompleted/{id}','TaskController@UpdateTaskAsCompleted');
Route::get('/taskhasnotcompleted/{id}','TaskController@UpdateTaskAsNotCompleted');
Route::get('/deletetask/{id}','TaskController@deletetask');
Route::get('/updatetask/{id}','TaskController@updatetask');

Route::post('/updatetasks','TaskController@updatetasks');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
