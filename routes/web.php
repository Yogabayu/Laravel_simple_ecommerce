<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('app/index');
// });

Route::get('/', [ProductController::class, 'home']); 

Route::get('/profil', [ProductController::class, 'profil']); 

// product
Route::get('/pengharum', [ProductController::class, 'pengharum']); 
Route::get('/kantor', [ProductController::class, 'kantor']); 
Route::get('/tisue', [ProductController::class, 'tisue']); 
Route::get('/kebersihan', [ProductController::class, 'kebersihan']); 

// Route::get('/products', [ProductController::class, 'index']);

Route::resource('products', ProductController::class);
