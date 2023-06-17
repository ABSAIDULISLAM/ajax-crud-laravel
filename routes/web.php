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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [
    'uses' => 'App\Http\Controllers\productController@viewProducts',
    'as' => '/'
]);
Route::post('/add-product', [
    'uses' => 'App\Http\Controllers\productController@addProduct',
    'as' => 'add-product'
]);
Route::post('/update-product', [
    'uses' => 'App\Http\Controllers\productController@updateProduct',
    'as' => 'update-product'
]);
Route::post('/delete-product', [
    'uses' => 'App\Http\Controllers\productController@deleteProduct',
    'as' => 'delete-product'
]);

