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
})->name("home");

Route::get('/destinazioni', function () {
    $array_destinazioni = config("destinazioni");

    $data = [
        "destinazioni" => $array_destinazioni,
    ];

    return view('destinazioni', $data);
})->name("destinazioni");

Route::get('/termali', function () {
    $array_termali = config("termali");
    $array_benessere = config("benessere");

    $data = [
        "termali" => $array_termali,
        "benesseri" => $array_benessere,
    ];

    return view('termali', $data);
})->name("termali");

Route::get('/hotel', function () {
    $array_hotel = config("hotel");

    $data = [
        "hotels" => $array_hotel,
    ];

    return view('hotel', $data);
})->name("hotel");

Route::get('/prodotti', function () {
    $array_prodotti = config("prodotti");

    $data = [
        "prodotti" => $array_prodotti,
    ];

    return view('prodotti', $data);
})->name("prodotti");

Route::get('/store', function () {
    $array_store= config("store");

    $data = [
        "stores" => $array_store,
    ];

    return view('store', $data);
})->name("store");
