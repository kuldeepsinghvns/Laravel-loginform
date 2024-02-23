<?php

namespace App\Http\Middleware;

// use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\LoginManager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('/signup', function () {
    return view('signup');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/login', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

// Route::post('/logout', function () {
//     return view('logout');
// });

Route::get('/logout', function () {
    return view('logout');
});



Route::get('/test',function(){
    return view('test');
});
