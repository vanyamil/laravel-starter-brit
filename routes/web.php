<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['php_counter' => request('php_counter', 0)]);
});
