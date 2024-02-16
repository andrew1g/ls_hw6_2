<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\OrderController;
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

Route::get('/catalog/index', [CatalogController::class, 'index'])->name('catalog.index');
Route::get('/catalog/category/{category}', [CatalogController::class, 'category'])->name('catalog.category');
Route::get('/catalog/product/{product}', [CatalogController::class, 'product'])->name('catalog.product');
Route::get('/catalog/product/{product}/buy', [CatalogController::class, 'buyproduct'])->name('catalog.buyproduct');

Route::post('/catalog/product/order', [OrderController::class, 'orderproduct'])->name('catalog.orderproduct');
Route::post('/catalog/product/ordersuccess', [OrderController::class, 'ordersuccess'])->name('order.success');


Route::get('/', function () {
    return redirect()->route('catalog.index');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cart', function () {
    return view('cart');
})->middleware(['auth', 'verified'])->name('cart');

require __DIR__.'/auth.php';
