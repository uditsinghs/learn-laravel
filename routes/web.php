<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});

Route::get("/user/{name}",[UserController::class,"getUserNameByRoute"]);

Route::get("/userby",[UserController::class,"getView"]);
