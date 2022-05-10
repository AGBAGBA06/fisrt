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
/*
Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/','App\http\Controllers\PagesController@home');

Route::get('/apropos','App\http\Controllers\PagesController@apropos' );

Route::get('/services','App\http\Controllers\PagesController@services');

Route::get('/show/{id}','App\http\Controllers\PagesController@show');

Route::get('/create','App\http\Controllers\PagesController@create');

Route::post('/sauverproduit','App\http\Controllers\PagesController@sauverproduit');

Route::get('/edit/{id}','App\http\Controllers\PagesController@edit');

Route::get('/modifierproduit','App\http\Controllers\PagesController@modifierproduit');