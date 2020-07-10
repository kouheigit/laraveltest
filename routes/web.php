<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Middleware\forth1;

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

Route::get('third/practicemessage','thirdController@practicemessage');

Route::get('fourth','fourthController@index');

Route::get('fourth/middle','fourthController@middle');

Route::get('fourth/vali','fourthController@vali');
Route::post('fourth/vali','fourthController@valipost');

Route::get('fourth/vali1','fourthController@vali1');
Route::post('fourth/vali1','fourthController@vali1post');

Route::get('fourth/vali2','fourthController@vali2');
Route::post('fourth/vali2','fourthController@vali2post');

Route::get('fourth/vali3','fourthController@vali3');
Route::post('fourth/vali3','fourthController@vali3post');

Route::get('fourth/valiX','fourthController@valiX');
Route::post('fourth/valiX','fourthController@valiXpost');

Route::get('five/db','fiveController@db');

Route::get('five/db1','fiveController@db1');

Route::get('five/db2','fiveController@db2');

Route::get('five/dbori','fiveController@dbori');
Route::post('five/dbori','fiveController@dbori2');

Route::get('five/db3','fiveController@db3');

Route::get('five/db4','fiveController@db4');
Route::post('five/db4post','fiveController@db4post');

Route::get('five/db5','fiveController@db5');
Route::post('five/db5post','fiveController@db5post');

Route::get('five/db6','fiveController@db6');

Route::get('five/db7','fiveController@db7');
Route::post('five/db7post','fiveController@db7post');

Route::get('five/db8','fiveController@db8');
Route::post('five/db8post','fiveController@db8post');

Route::get('five/db10S','fiveController@db10S');
Route::get('five/db10','fiveController@db10');
Route::post('five/db10','fiveController@db10post');


Route::get('five/db11','fiveController@db11');
Route::get('five/db11get','fiveController@db11get');
Route::post('five/db11get','fiveController@db11post');

