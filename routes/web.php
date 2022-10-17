<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
    // return view('welcome');
    return view('WebGIS.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', 'App\Http\Controllers\WebGISController@index')->name('index');
Route::get('/sk-perhutanan-sosial', 'App\Http\Controllers\WebGISController@SkPs')->name('SkPs');
Route::get('/tentang', 'App\Http\Controllers\WebGISController@tentang')->name('tentang');
Route::get('/contact', 'App\Http\Controllers\WebGISController@contact')->name('contact');
Route::get('/galery', 'App\Http\Controllers\WebGISController@galery')->name('galery');
Route::get('/blog', 'App\Http\Controllers\WebGISController@blog')->name('blog');
Route::get('/peta', 'App\Http\Controllers\WebGISController@peta')->name('peta');
Route::get('/petaJs', 'App\Http\Controllers\WebGISController@petaJs')->name('petaJs');
Route::get('/peta2', 'App\Http\Controllers\WebGISController@peta2')->name('peta2');
Route::get('/pupr-pontianak', 'App\Http\Controllers\WebGISController@pupr')->name('pupr');
Route::get('/peta3', 'App\Http\Controllers\WebGISController@peta3')->name('peta3');


// Admin routes
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
// End Admin route
