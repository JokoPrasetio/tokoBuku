<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\productBookController;
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
//     return view('index', [
//         "title" => "Toko Buku | Joko Prasetio",
//     ]);
// });
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authentication']);
});


Route::group(['middleware' => ['auth']], function () {
    // Route Category
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::resource('/category', categoryController::class);
    Route::get('/datatable/category', [categoryController::class, 'dataTable']);

    // Route Produk
    Route::resource('/product-book', productBookController::class);
    Route::put('/product-book/{uid}/edit', [productBookController::class, 'update']);
    Route::get('/datatable/product-book', [productBookController::class, 'dataTable']);
});
