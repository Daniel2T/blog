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

/*Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/video', function () {
    return view('video');
}); */

//Route::get('/','homeController@home')->name('home');
//Route::get('/contact','homeController@contact')->name('contact');
//Route::get('/video','homeController@video')->name('video');
//Route::get ( '/' , function () { return 'Hello, World!' ; });
//Route::get ( '/' , function () { return view ( 'test/welcome' ); });
//Route::get ( '/', 'test')
Route::get('/', 'WelcomeController@boot');
Route::get('/info', 'InfoController@boot');
Route::get('/video', 'WelcomeController@boot');
Route::get('/contact', 'ContactController@boot');
