<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;

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
Route::get('/sales', [SaleController::class,'index']) -> name('sales.index');
Route::get('/create_sales', [SaleController::class,'create']) -> name('sales.create');
Route::post('/sales', [SaleController::class,'store']) -> name('sales.store');
Route::get('/create_sales', [SaleController::class,'create']) -> name('sales.create');
Route::get('/sales/{id}', [SaleController::class,'edit']) -> name('sales.edit');
Route::put('/sales/{id}', [SaleController::class,'update']) -> name('sales.update');
Route::delete('/sales/{id}', [SaleController::class,'destroy']) -> name('sales.destroy');



