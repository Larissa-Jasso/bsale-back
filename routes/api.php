<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/categories', [ProductController::class, 'Categories']);
Route::get('/products', [ProductController::class, 'Products']);
Route::get('/produts_by_category/{id}', [ProductController::class, 'ProductsByCategory']);
Route::get('/search_product/{name}', [ProductController::class, 'SearchProduct']);
Route::get('/sorter_product/{option}', [ProductController::class, 'SorterProduct']);

