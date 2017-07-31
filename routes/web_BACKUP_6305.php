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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
<<<<<<< HEAD
Route::post('/contact','ViewController@message');
=======
Route::post('/contact/submit','MessagesController@submit');
>>>>>>> 288e59f8516a43f7f3077079d3ab334cc6a9d90b
