<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|Here is the routes that call controllers actions
|
*/

Route::get('/', "MainController@home")->name("/");
Route::post('/send', "MainController@sendMessage")->name("/send");

