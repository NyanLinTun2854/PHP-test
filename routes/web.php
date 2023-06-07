<?php

use Illuminate\Support\Facades\Http;
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

// Route::get('greeting', fn() => 'Min Ga Lar Par');

// Route::get('myName', function () {
//     $firstName = "Nyan Lin";
//     $lastName = "Tun";
//     return $firstName." ".$lastName;
// });

// Route::get('area/{width}/{height?}', function ($width, $height= null) {
//     return "Area is ". $width ." sqft.";
// });

// Route::get('products', function () {
//     $data = file_get_contents('https://fakestoreapi.com/products');
//     dd(json_decode($data));
// });

Route::get('greeting', fn() => "Min Ga Lar Par");

Route::get('myName/{firstName}/{secondName?}', function($firstName, $secondName = null) {
    return "My Name is ".$firstName." ".$secondName.".";
});

Route::get('product', function () {
    $data = file_get_contents('https://fakestoreapi.com/products');
    // dd(json_decode($data));

    return $data;
});

Route::get('products/product-max/{amount}', function ($amount) {
    // $products = file_get_contents('https://fakestoreapi.com/products');
    // $productsArr = json_decode($products);
    // $dataArr = array_filter($productsArr, fn($product) => $product->price < $amount);
    // dd($dataArr);

    $res = Http::get('https://fakestoreapi.com/products');
    dd($res->collect()->where('price','<',$amount));
});

Route::get('products/priceBetween/{min}/and/{max}', function ($min, $max) {
    $res = Http::get('https://fakestoreapi.com/products');
    dd($res->collect()->whereBetween('price', [$min, $max]));
});