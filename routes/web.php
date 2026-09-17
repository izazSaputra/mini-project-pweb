<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components/index');
})->name('index');

Route::get('/news', function () {
    return view('components.news');
})->name('news');
