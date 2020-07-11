<?php

use Illuminate\Support\Facades\Route;
use App\Article;

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


Route::put('articles/{article}', 'ArticlesController@update');

Route::post('/', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');

Route::get('/', 'ArticlesController@index');
Route::get('articles/{article}', 'ArticlesController@show');

Route::get('articles/{article}/edit' , 'ArticlesController@edit');



