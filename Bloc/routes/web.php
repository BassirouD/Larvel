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

Route::get('Acceuil', function () {
    return view('Acceuil');
});


Route::get('About', function () {
    return view('About');
});

Route::get('Contact', function () {
    return view('Contact');
});

Route::get('Trainer', function () {
    return view('Trainer');
});
