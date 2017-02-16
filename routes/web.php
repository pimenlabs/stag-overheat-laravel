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

Route::get('question', 'QuestionController@index');

Route::get('question/{id}', 'QuestionController@show');

// Route::post('question', function(){
//   echo "store question with object from POST data";
// });
//
// Route::put('question/{id}', function($id){
//   echo "update question with id = ". $id. " and object from PUT data";
// });
//
// Route::delete('question/{id}', function($id){
//   echo "delete question with id = ". $id;
// });
