<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
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
    return view('welcome');
})->name('home');

Route::get('/test',[TicketController::class,'index'])->name('test');
Route::get('/test2/{id}',[TicketController::class,'find'])->name('find');
Route::get('/test3/{id}',[TicketController::class,'detail'])->name('detail');