<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('personal');
});

Route::get('/portfolio-details3', function () {
    return view('portfolio-details3');
});

Route::get('/portfolio-details1', function () {
    return view('portfolio-details1');
});

Route::get('/portfolio-details2', function () {
    return view('portfolio-details2');
});
