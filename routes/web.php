<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

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
});

Route::get('/books',[BookController::class,'index'])->name('book.index');
Route::get('/books/create',[BookController::class,'create'])->name('book.create');
Route::post('/books',[BookController::class,'store'])->name('books.store');
Route::get('/books/{book}/edit',[BookController::class,'edit'])->name('book.edit');
Route::get('/books/{book}/update',[BookController::class,'update'])->name('book.update');
Route::delete('/books/{book}/remove',[BookController::class,'remove'])->name('book.remove');
