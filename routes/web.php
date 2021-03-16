<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SupplierController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/project/{slug}', [ProjectController::class, 'show'])->name('project-detail');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogDetailController::class, 'show'])->name('blog-detail');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/goods', [GoodsController::class, 'index'])->name('goods');
Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');
Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');

