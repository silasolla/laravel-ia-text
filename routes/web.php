<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextController;

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

Route::get('/texts/index', [TextController::class, 'index'])->name('texts.index');
Route::get('/texts/create', [TextController::class, 'create'])->name('texts.create');
Route::post('/texts/store', [TextController::class, 'store'])->name('texts.store');

Route::get('/texts/{id}', [TextController::class, 'show'])->name('texts.show');
Route::get('/texts/{id}/edit', [TextController::class, 'edit'])->name('texts.edit');
Route::post('/texts/{id}', [TextController::class, 'update'])->name('texts.update');
Route::post('/texts/{id}/delete', [TextController::class, 'delete'])->name('texts.delete');
