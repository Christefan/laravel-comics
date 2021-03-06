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

$data = config('comics');


Route::get('/', function () use ($data) {
    return view('home',compact("data"));
})->name('home');

Route::get('/comic/{id}', function ($id) use ($data) {
    $comic_card = $data[$id];
    return view('comic', compact("comic_card"));
})->name('comic');
