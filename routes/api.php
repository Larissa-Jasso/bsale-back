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
Route::get('/produts_by_category/{id}', [ProductController::class, 'ProductsByCategory']);
Route::post('/search_product', [ProductController::class, 'SearchProduct']);
Route::post('/filter_product', [ProductController::class, 'FilterProduct']);

