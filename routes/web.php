<?php


use Illuminate\Support\Facades\Route;

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
Route::get('/',[\App\Http\Controllers\Backend\DashboardController::class,'index']);
Route::get('products',[\App\Http\Controllers\Backend\ProductController::class,'index'])->name('admin.product');
Route::get('products/create',[\App\Http\Controllers\Backend\ProductController::class,'create'])->name('admin.product.create');
Route::post('products/create',[\App\Http\Controllers\Backend\ProductController::class,'store']);
Route::get('products/edit/{id}',[\App\Http\Controllers\Backend\ProductController::class,'edit'])->name('admin.product.edit');
Route::post('products/edit/{id}',[\App\Http\Controllers\Backend\ProductController::class,'update']);
Route::get('products/delete/{id}',[\App\Http\Controllers\Backend\ProductController::class,'delete'])->name('admin.product.delete');

