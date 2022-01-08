<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UserController;

Route::get("/",[UserController::class,"getData"]);

Route::get('welcome', function () {
    return view('welcome');
});


Route::post("welcome",[Users::class,'index']);

// editpage

Route::get('edit/{id}',[UserController::class,'showData']);

Route::post('edit',[UserController::class,'Update']);
// deletepage
Route::get("delete/{id}",[UserController::class,'delete']);

