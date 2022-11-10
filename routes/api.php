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
Route::get('/produts_by_category', [ProductController::class, 'ProductsByCategory']);
Route::get('/search_product', [ProductController::class, 'SearchProduct']);
Route::get('/filter_product', [ProductController::class, 'FilterProduct']);
