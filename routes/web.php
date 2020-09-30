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
Route::get('/about', function () {
    return view('about');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/article/{page}', 'ArticleController@article');

Route::get('/master', 'MasterController@master')->name('master');

Route::get('/home1', 'Home1Controller@home1');

Route::get('/post1', function(){
    return view('post1');
});
Route::get('/articles', 'Article1Controller@articles');