<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/en\/');
});

Route::get('/en/', function () {
    return view('welcome');
});

    Route::get('/en\/conctact', function () {
        return view('welcome');
    });


Route::get('/es/', function () {
    return view('welcome');
});

    Route::get('/es/contacto', function () {
        return view('welcome');
    });