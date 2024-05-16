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

Route::get('/show',function(){
    return view('showdata');
});



Route::get('/test',function(){
    return view('test');
});


Route::get('/master',function(){
    return view('layout/master');
});

//  E-commerce

Route::get('/ecommerce',function(){
    return view('layout/ecommerce');
});

Route::get('/ecommercesign',function(){
    return view('layout/ecommercesignup');
});

Route::post('/ecommercesign',function(){
    return view('layout/ecommercesignup');
});

Route::get('/ecommercelogin',function(){
    return view('layout/ecommercelogin');
});
Route::post('/ecommercelogin',function(){
    return view('layout/ecommercelogin');
});


