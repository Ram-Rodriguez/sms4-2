<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/hello');
});

Route::get('/hello', function () {
    return view('hello');
});
