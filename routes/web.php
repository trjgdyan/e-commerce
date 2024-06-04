<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use Laravel\Prompts\Prompt;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;





Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/process', [AuthController::class, 'login_process'])->name('login.process');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/process', [AuthController::class, 'register_process'])->name('register.process');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::put('/profile/update', [AuthController::class, 'updateProfile'])->name('profile.update');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [FrontendController::class, 'dashboard'])->name('frontend.dashboard');

    Route::get('/detail/{id}', [FrontendController::class, 'detail'])->name('detail');

    Route::get('/cart', [ProductController::class, 'cart'])->name('cart');
    Route::post('/cart/add/{id}', [ProductController::class, 'addCart'])->name('addCart');
    Route::get('/checkout', [ProductController::class, 'checkout'])->name('checkout');
    Route::post('/checkout', [ProductController::class, 'processCheckout'])->name('processCheckout');
    Route::get('/print-receipt', [ProductController::class, 'printReceipt'])->name('print_receipt');

    Route::get('/cart/increase/{id}', [ProductController::class, 'increaseCartQuantity'])->name('cart.increase');
    Route::resource('products', ProductController::class);

    Route::get('/cart/decrease/{id}', [ProductController::class, 'decreaseCartQuantity'])->name('cart.decrease');
    Route::resource('product-categories', ProductCategoryController::class);
    Route::post('/cart/print-receipt/{id}', [ProductController::class, 'addCartPrint'])->name('addCartPrint');
});







// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/create', [ProductController::class, 'create'])->name('create');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');







// Route::get('/detail/1', [FrontendController::class, 'detail'])->name('detail');



// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
// });
