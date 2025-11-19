<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/homepage', [PageController::class, 'homepage']);
Route::get('/talk-with-us', [PageController::class, 'talk_with_us']);
Route::get('/our-products', [PageController::class, 'our_products']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/detail/{services}', [PageController::class, 'service']);