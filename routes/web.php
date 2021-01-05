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
    $array_home = config("home");

    $data = [
        "prodotti" => $array_home,
    ];

    return view('home', $data);
})->name("homepage");

Route::get('/destinazioni', function () {
    $array_destinazioni = config("destinazioni");

    $data = [
        "destinazioni" => $array_destinazioni,
    ];

    return view('destinazioni', $data);
})->name("destinazioni");
