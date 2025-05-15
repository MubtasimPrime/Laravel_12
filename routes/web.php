<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', fn() => view('home'));

// Route::view('/home','home');

// Route::get('/about/{name}', function ($name) {
//     return view('about',['name'=>$name]);
// });

Route::get('home', [UserController::class, 'getUser']);
Route::get('about', [UserController::class, 'aboutUser']);
Route::get('about/{name}', [UserController::class, 'getUserName']);