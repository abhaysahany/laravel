<?php

use App\Http\Middleware\LoginMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    echo  "<pre>";
    print_r($request->header());
});
Route::post('/login', function () {})->name('login');
