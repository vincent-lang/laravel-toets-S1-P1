<?php

use App\Http\Controllers\PersonController;
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

Route::get('/', [PersonController::class, 'index'])->name('person.index');

Route::get('/person/create', [PersonController::class, 'create'])->name('person.create');

Route::post('/person', [PersonController::class, 'store'])->name('person.store');

Route::get('/person/{person}/edit', [PersonController::class, 'edit'])->name('person.edit');

Route::put('/person/{person}/update', [PersonController::class, 'update'])->name('person.update');

Route::get('/person/{person}/delete', [PersonController::class, 'delete'])->name('person.delete');
