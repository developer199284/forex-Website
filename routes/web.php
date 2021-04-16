<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
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
Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/login', 'AuthController')->name('login');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');
Route::get('/forgot', 'AuthController@forgot')->name('forgot');
Route::post('/forgot', 'AuthController@forgot');
Route::get('/logout', 'AuthController@logout')->name('logout');

// Route::get('/signup', 'AboutusController@signup');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about-us', 'AboutusController@index');
Route::get('/about-us/Mission', 'AboutusController@Mission');
Route::get('/about-us/Values', 'AboutusController@Values');
Route::get('/about-us/Trade', 'AboutusController@Trade');



Route::get('/news', 'AboutusController@news');
Route::get('/download', 'AboutusController@download');
Route::get('/metaTrader', 'AboutusController@metaTrader');
Route::get('/contact', 'AboutusController@contact');
Route::get('/finance', 'AboutusController@finance');


Route::get('/users', 'UsersController@index')->name('users');
Route::group(['middleware' => ['login']], function () {
    // Route::get('/finance', 'HomeController@index')->name('home');
});

Route::group(['middleware' => ['login']], function () {
    Route::post('/developer', 'Util\\DbUtil@developer');
    Route::post('/notify/read', 'Util\\NotifyUtil@read');
});

