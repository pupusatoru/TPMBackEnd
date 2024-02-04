<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/login', function() {
    return view('login');
});

Route::get('/login/dashboard', function(){
    return view('dashboard');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/dashboard', function(){
    return view('dashboard');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/login/contact', function(){
    return view('contact');
});

Route::get('/timeline', function(){
    return view('timeline');
});

Route::get('/login/timeline', function(){
    return view('timeline');
});

Route::get('/homepage/home', function(){
    return view('home');
});


Route::get('/home/mj', function(){
    return view('home');
});

Route::get('/home/champ', function(){
    return view('home');
});

Route::get('/home/about', function(){
    return view('home');
});

Route::get('/home/faq', function(){
    return view('home');
});

Route::get('/home/timeline', function(){
    return view('home');
});