<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

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
    return view('page\student\index');
});

Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/manage', [HomeController::class, "manage"])->name('manage');

Route::post('/store', [StudentController::class, "store"])->name('store');
// Route::get('/{$id}/delete', [StudentController::class, "delete"])->name('delete');
Route::get('/{id}/delete', [StudentController::class, "delete"])->name('delete');
// Route::get('/{id}/edit', [StudentController::class, "edit"])->name('edit');
Route::get('/{id}/edit', [StudentController::class, "edit"])->name('edit');

Route::post('/{id}/update', [StudentController::class, "update"])->name('update');
Route::get('/cancel', [StudentController::class, "cancel"])->name('cancel');



