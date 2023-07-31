<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/product', function () {
//     return view('product');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/home', function () {
//     return view('home');
// });


Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('/delete/{id}', [ProductController::class, 'destroy']);
Route::get('/edit/{id}', [ProductController::class, 'edit']);
Route::post('/edit/{id}', [ProductController::class, 'update']);