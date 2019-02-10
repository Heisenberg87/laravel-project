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



//Debug Display all SQL executed in Eloquent
/*
\Event::listen('Illuminate\Database\Events\QueryExecuted', function ($query) {
    echo'<pre>';
    var_dump($query->sql);
    echo'</pre>';
});
*/

Route::get('/',  'PagesController@index');

Route::get('about','PagesController@about');

Route::get('cv', 'PagesController@cv');

Route::get('services', 'PagesController@services');



Route::get('contactus', 'ContactUsController@index');
Route::post('contactus', 'ContactUsController@store');


Route::resource('posts','PostsController');

Route::get('currency/search', 'CurrencyController@search')->middleware('ajax');

Route::resource('currency', 'CurrencyController',[
    'only' => ['index']
]);

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('character/search', 'CharactersController@search');
Route::get('character/{id}/', 'CharactersController@show');