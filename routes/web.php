<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
    return view('home');
});
// routes/web.php
Route::get('/home', function(){
    return view('home');
});

Route::get('/flights',function() {
    return view('flights');
});

Route::get('/login',function() {
    return view('login');
});
Route::get('/signup',function() {
    return view('signup');
});
Route::get('/ticket',function() {
    return view('ticket');
});
Route::get('/confirm',function() {
    return view('confirm');
});
Route::get('/data',function() {
    return view('data');
});
Route::get('/promo',function() {
    return view('promo');
});
Route::get('/chair',function() {
    return view('chair');
});
Route::get('/berhasil',function(){
    return view('berhasil');
});
route::get('/order',function(){
    return view('/order');
});
Route::get('/rilticket',function(){
    return view('rilticket');
});