<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('pages.home'));
Route::get('/about', fn() => view('pages.about'));
Route::get('/contact', fn() => view('pages.contact'));