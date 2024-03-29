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

Route::get('/home', function () {
    return view('welcome');
})->name("Main");

// First Solution
Route::redirect('users/list', '/home', 301);


// Second Solution
Route::get('users/list', function() {
    return redirect()->route("Main");
});

Route::get('users/{id}', function($id) {
    return "this page is profile for user $id";
});


// Solution 2
// ->whereNumber("id")