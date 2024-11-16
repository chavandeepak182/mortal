<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/projects', function () {
    return view('frontend.projects');
});