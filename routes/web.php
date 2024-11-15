<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/index', function () {
    return view('frontend.index-2');
});

Route::get('/services', function () {
    return view('frontend.services');
});
