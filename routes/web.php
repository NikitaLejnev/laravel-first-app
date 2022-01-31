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

// Route::get('/', function () {
//     return 'Hello, World!';
// });

// Route::post('/', function () {
// });

// Route::put('/', function () {
// });

// Route::delete('/', function () {
// });

// Route::any('/', function () {
// });

// Route::match('/', function () {
// });

// Example 3-4. Routes calling controller methods
//
// Route::get('/', 'WelcomeController@index');
//
// Example 3-5. Route parameters
// 
// Route::get('users/{id}/friends', function ($id) {
// 
// })
//
// Example 3-6. Optional route parameters
// 
// Route::get('users/{id}/friends', function($id) {});
//
// Example 3-7. Regular expression route constraints
// 
// Route::get('users/{id}', function ($id) { 
// })->where('id', '[0-9]+');j
// 
// Route::get('users/{username}', function ($username) {
// })->where('username', '[A-Za-z]+');

// Route::get('users/{id}/{slug}', function ($id, $slug) {
// })->where('id' => '[0-9]+', 'slug' => '[A-Za-z]+');
