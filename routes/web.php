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
    $welcome = 'Benvenuto in laravel';
    $data =[
        'Homepage'=> 'homepage',
        'Pagina 2'=> 'secondpage',
        'Pagina 3'=> 'thirdpage'
    ];
    return view('index',compact('welcome','data'));
})->name('homepage');

Route::get('/secondpage', function () {
    $welcome = 'Pagina 2';
    $data =[
        'Homepage'=> 'homepage',
        'Pagina 2'=> 'secondpage',
        'Pagina 3'=> 'thirdpage'
    ];
    return view('index',compact('welcome','data'));
})->name('secondpage');

Route::get('/thirdpage', function () {
    $welcome = 'Pagina 3';
    $data =[
        'Homepage'=> 'homepage',
        'Pagina 2'=> 'secondpage',
        'Pagina 3'=> 'thirdpage'
    ];
    return view('index',compact('welcome','data'));
})->name('thirdpage');


