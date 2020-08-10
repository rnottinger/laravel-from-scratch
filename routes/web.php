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

// http://laravel-from-scratch.test/welcome
Route::get('/welcome', function () {
    return view('welcome');
});

// http://laravel-from-scratch.test/string
Route::get('/string', function () {
    return "Hello World!";
});

// http://laravel-from-scratch.test/json
Route::get('/json', function () {
    return ['foo' => 'bar'];
});

// When the user makes a GET request to the /test endpoint in the browser
// in response I want to load a view called test
// http://laravel-from-scratch.test/test
Route::get('/test', function () {
    return view('test');
});

// http://laravel-from-scratch.test/query-string?name=jeff
// http://laravel-from-scratch.test/query-string?name=john
// http://laravel-from-scratch.test/query-string?name=sarah
Route::get('/query-string', function () {
    // $name = request('name');

    // return $name;

    // now pass data to a view
    // Undefined variable: name (View: /Users/richardottinger/Documents/projects/laravel-from-scratch/resources/views/test.blade.php)
    // need to send it through to the view
    // return view('test');
    //
    // so now any key within this array will be available within the view
    // return view('test', [
    //     'name' => $name,
    // ]);
    return view('test', [
        'name' => request('name'),
    ]);

});

// http://laravel-from-scratch.test/query-string?name=<script>alert('hello');</script>
