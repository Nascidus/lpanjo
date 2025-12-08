<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/seguro-automoveis', function () {
    return view('seguro-automoveis');
});

Route::get('/consorcio-automovel', function () {
    return view('consorcio-automovel');
});
