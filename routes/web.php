<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $homePage = 'HomePage';
    return view('home', compact("homePage"));
});
Route::get('/about', function () {
    $About = 'About Laravel';

    return view('about', compact("About"));
});
