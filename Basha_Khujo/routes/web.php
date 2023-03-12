<?php

use App\Http\Controllers\WebsiteContoller\DivisionController;
use App\Http\Controllers\WebsiteContoller\HomeController;
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


Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/signIn',[HomeController::class, 'signIn'])->name('signIn');
Route::get('/signUp',[HomeController::class, 'signUp'])->name('signUp');

Route::get('/dhaka',[DivisionController::class, 'dhakaIndex'])->name('dhaka.home');
Route::get('/division-chattogram',[DivisionController::class, 'chattogramDivision'])->name('division.chattogram');


Route::get('/detail',[DivisionController::class, 'detail'])->name('detail');


