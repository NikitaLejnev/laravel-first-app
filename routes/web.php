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

// Example 3-2. Sample website

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('about', function () {
//     return view('about');
// });

// Route::get('products', function () {
//     return view('products');
// });

// Route::get('services', function () {
//     return view('services');
// });

// Example 3-3. Route verbs

Route::get('/', function () {
    return 'Hello, World!';
});

Route::post('/', function () {
});

Route::put('/', function () {
});

Route::delete('/', function () {
});

Route::any('/', function () {
});

Route::match('/', function () {
});
