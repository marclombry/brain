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
	return view('auth/login');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cerebro','CerebroController@index')->name('cerebro');
Route::get('/outils','OutilsController@index')->name('outils');
Route::get('/si','SiController@index')->name('si');
Route::get('/admin','AdminController@index')->name('admin');
Route::get('stock/{n}',function($n){
	echo 'testing'.$n;
});
Route::get('mails','mailsController@contact');

Route::get('/c','StatsController@index');


// route graphiques //
/*
use App\Http\Middleware\GraphiquesAuthorize;
Route::post('/articles','StatsController@create')->middleware('Graph');
Route::get('articles','PostController@index')->middleware('Graph');
Route::post('articles','PostController@store')->middleware('Graph');
*/



Route::post('articles','ArticlesController@post')->middleware('Graph');
Route::get('articles','ArticlesController@index')->middleware('Graph');
