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

Route::get('/', 'PageController@index')->name('homepage');
Route::get('about', 'PageController@about')->name('about');
Route::get('contacts', 'PageController@contacts')->name('contacts');
Route::get('posts', 'PageController@posts')->name('posts');
//static method
Auth::routes(['register' => false]);



//raggruppate solo per Admin


//Dentro la nostra route group middleware inseriamo le route che saranno accessibili solo a chi sara' autenticato,
//il namespace serve x fare in modo che le route all interno di middleware faranno riferimento a Admin/,
//il prefix serve x dare a quelle route un prefisso come admin a tutte le route
//il name serve per far in modo che le pagine all interno del controller PostController ad esempio non siano posts.index ma admin.posts.index
Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    

    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('posts', 'PostController');


});