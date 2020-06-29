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

Route::get('third/practice','thirdController@index');

Route::get('third/practice1','thirdController@practice1');
Route::post('third/practice1','thirdController@practice1post');

Route::get('third/practiceif','thirdController@practiceif');
Route::post('third/practiceif','thirdController@practiceifpost');

Route::get('third/practiceif2','thirdController@practiceif2');
Route::post('third/practiceif2','thirdController@practiceif2post');

Route::get('third/for','thirdController@practicefor');

Route::get('third/foreach2','thirdController@foreach2');

Route::get('third/while','thirdController@practicewhile');


Route::get('third/practicelayout','thirdController@practicelayout');

