<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('movies.index');
})->name('home');

// All Movies
Route::get('/movies', function () {
    return view("movies.show-all");
})->name('movies');

// Movie Detail
Route::get('/movies/{title}', function () {
    return view('movies.show');
})->name('movie-detail');

// Advanced Search
Route::get('/advanced-search', function () {
    return view('movies.advanced-search');
})->name('advanced-search');

// FAQ Help
Route::get('/faq', function () {
    return view('movies.faq');
})->name('faq');

Route::get('/signin', function () {
    return view('movies.auth.login');
})->name('login');
Route::get('/signup', function () {
    return view('movies.auth.register');
})->name('register');
