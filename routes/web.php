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

/*
Route::get('/hola.php', function () {
    //return view('welcome');
    return '<html><body><h1>Home page</h1></body></html>';
});


Route::get('/about.php', function () {
    return view('pages.about');
});
*/

Route::get('/about', 'App\Http\Controllers\PagesController@about');





