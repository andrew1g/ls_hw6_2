<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminEditMiddleware;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleEmail;

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

// Route::get('/send-email', function () {
//     Mail::to('testtest@mail.ru')->send(new SampleEmail());
//     return "Email sent successfully!";
// });
Route::group(['middleware' => \App\Http\Middleware\AdminEditMiddleware::class], function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/admin/categories', [AdminController::class, 'categories'])->name('admin.categories');
    Route::get('/admin/products', [AdminController::class, 'products'])->name('admin.products'); 
    Route::get('/admin/productadd', [AdminController::class, 'productadd'])->name('admin.productadd'); 
    Route::post('/admin/productshow', [AdminController::class, 'productshow'])->name('admin.productshow'); 
    Route::post('/admin/productsave', [AdminController::class, 'productsave'])->name('admin.productsave');
    Route::post('/admin/productdelete', [AdminController::class, 'productdelete'])->name('admin.productdelete'); 
    
    Route::get('/admin/categories', [AdminController::class, 'categories'])->name('admin.categories'); 
    Route::get('/admin/categoryadd', [AdminController::class, 'categoryadd'])->name('admin.categoryadd'); 
    Route::post('/admin/categoryshow', [AdminController::class, 'categoryshow'])->name('admin.categoryshow'); 
    Route::post('/admin/categorysave', [AdminController::class, 'categorysave'])->name('admin.categorysave');
    Route::post('/admin/categorydelete', [AdminController::class, 'categorydelete'])->name('admin.categorydelete'); 
});