<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/404', function () {
    return "404! Page Not Found.";
});

Route::get('/403', function () {
    return "403 ! Permission Not Allowed.";
});

Route::get('/405', function () {
    return "405! Method Not Allowed.";
});


Route::post('/create-post', 'HomeController@index')->name('create-post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
