<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin'])->name('login.process');
Route::get('/barang', [AuthController::class, 'showBarang'])->name('barang');
Route::get('/transaksi', [AuthController::class, 'showTransaksi'])->name('transaksi');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return "Hello, Laravel";
// });

// Route::get('/', function(){
//     return view('test');
// });

// Route::get('data', function(){
//     return view('data');
// });


// Route::get('/', function(){
//     return view('test');
// });

