<?php

use Faker\Extension\Helper;
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

// Example 3-8. The url() helper

// <a href="<?php echo url('/'); 
?>">
<!-- // Outputs <a href="http://myapp.com/"> -->

<!-- Example 3-9. Defining route namespace -->

<!-- // Defining a route with name() in routes/web.php: -->
<!-- Route::get('members/{id}', 'MembersController@show')->name('members.show'); -->

<!-- // Linking the route in a view using the route() helper: -->
<!-- <a href="<?php echo route('members.show', ['id' => 14]); ?>"> -->

<!-- Example 3-10. Defining a route group

Route::group(function () {
  Route::get('hello', function() {
    return 'Hello';
  });
  Route::get('world', function () {
    return 'World';
  });
}); -->

<!-- Example 3-11. Restricting a group of routes to logged-in users only

Route::middleware('auth')->group(function() {
  Route::get('dashboard', function () {
    return view('dashboard');
  });
  Route::get('account', function () {
    return view('account');
  });
}); -->

<!-- Example 3-12. Applying the rate limiting middleware to a route

Route::middleware('auth:api', 'throttle:60,1')->group(function () {
    Route::get('/profile', function () {
        
    });
}); -->