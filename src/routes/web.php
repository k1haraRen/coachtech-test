<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FashionablyController;

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

Route::get('/', [FashionablyController::class, 'contact']);
Route::post('/confirm', [FashionablyController::class, 'confirm']);
Route::post('/thanks', [FashionablyController::class, 'thanks']);

Route::get('/admin', [FashionablyController::class, 'admin']);
Route::get('/admin/search', [FashionablyController::class, 'search']);
Route::delete('/admin/delete/{id}', [FashionablyController::class, 'destroy'])->name('admin.delete');

Route::get('/register', [FashionablyController::class, 'register']);
Route::get('/login', [FashionablyController::class, 'login']);