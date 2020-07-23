<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/InstaCare', function () {
    return view('instacare');
});

Route::get('/TweetCare', function () {
    return view('tweetcare');
});

Route::get('/InstaCareHasil', function () {
    return view('instacare_hasil');
});

Route::get('/TweetCareHasil', function () {
    return view('tweetcare_hasil');
});

