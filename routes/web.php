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

Route::get('/',  'PagesController@index');

Route::get('about','PagesController@about');

Route::get('cv', 'PagesController@cv');

Route::get('services', 'PagesController@services');


Route::resource('posts','PostsController');

Route::get('currency/search', 'CurrencyController@search')->middleware('ajax');

Route::resource('currency', 'CurrencyController',[
    'only' => ['index']
]);

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
