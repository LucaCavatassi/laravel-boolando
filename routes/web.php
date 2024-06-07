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
    $products = config("products.products");
    return view('home', compact("products"));
})->name("home");

// HEADER
Route::get("/user", function() {
    return view ("user");
})->name("user");

Route::get("/fav", function() {
    return view ("fav");
})->name("fav");

Route::get("/cart", function() {
    return view ("cart");
})->name("cart");

// FOOTER
Route::get("/legal", function() {
    return view ("legal");
})->name("legal");

Route::get("/privacy", function() {
    return view ("privacy");
})->name("privacy");

Route::get("/returns", function() {
    return view ("returns");
})->name("returns");
