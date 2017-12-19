<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('belajar/hello');
});

Route::get('/hellocontroller','hello_ctrl@index');
