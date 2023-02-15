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

Route::get('/', function () {
    return view('index');
});

Route::get('/secondpage', function () {
    $welcome = 'Pagina 2';
    return view('secondpage',compact('welcome'));
})->name('secondpage');

Route::get('/thirdpage', function () {
    $welcome = 'Pagina 3';
    return view('thirdpage',compact('welcome'));
})->name('thirdpage');


