<?php

use App\Http\Controllers\Comments;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components/index');
})->name('index');

Route::get('/news', function () {
    return view('components.news');
})->name('news');

Route::post('/comments', [Comments::class, 'store'])->name('comments.store');