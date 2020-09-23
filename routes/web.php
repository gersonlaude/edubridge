<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/contact',function(){
    return view('frontend.contact');
})->name('contact');

Route::get('/english_course',function (){
   return \view('frontend.english_course');
})->name('english_course');

Route::get('/mandarin_course',function (){
    return \view('frontend.mandarin_course');
})->name('mandarin_course');

Route::get('/destinations',function (){
   return \view('frontend.destinations');
})->name('destinations');

Route::get('/campus',function (){
    return \view('frontend.campus');
})->name('campus');

Route::get('/campus_detail',function (){
    return \view('frontend.campus_detail');
})->name('campus_detail');


