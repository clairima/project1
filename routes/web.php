<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Product;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AdminCategoriesController;

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

Route::get('/', function () {
    return view('dashboard');
});

//Route::get('/dashboard', function () {
   // return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/',function(){
   return view('home');
});


Route::get('/UserPage',[ProductController::class,'shop']);
Route::get('/checkout',[CheckoutController::class,'checkout']);
Route::get('/dashboard',[HomeController::class,'index']);
Route::get('/categories',[CategoriesController::class,'categories']);
Route::get('/adminCategories',[AdminCategoriesController::class,'adminCategories']);
