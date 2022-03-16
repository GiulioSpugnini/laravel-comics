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

    $items = config('comics');
    return view('home', compact('items'));
})->name('home');

Route::get('/items', function () {

    $items = config('comics');

    return view('items', compact('items'));
})->name('items');

Route::get('/items/{id}', function ($id) {

    $items = config('comics');
    $item = $items[$id];
    return view('item', compact('item'));
})->name('item');
