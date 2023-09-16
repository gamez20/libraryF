<?php

use App\Http\Controllers\LibraryController;
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

Route::get('/', function () {
    return view('indexLibrary');
})->name('index');

Route::get('/prestamo/consulta' ,[LibraryController::class,'indexConsult'])->name('consulta.index');
Route::post('/prestamo/create' ,[LibraryController::class,'create'])->name('create.loan');

Route::post('/prestamo/search' ,[LibraryController::class,'search_loan'])->name('consulta.search');
