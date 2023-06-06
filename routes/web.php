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

Route::get('greeting', fn() => 'Min Ga Lar Par');

Route::get('myName', function () {
    $firstName = "Nyan Lin";
    $lastName = "Tun";
    return $firstName." ".$lastName;
});

Route::get('area/{width}/{height?}', function ($width, $height= null) {
    return "Area is ". $width ." sqft.";
});

Route::get('products', function () {
    $data = file_get_contents('https://fakestoreapi.com/products');
    dd(json_decode($data));
});