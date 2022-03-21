<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;

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

Route::prefix('statuses')->group(function () {
    Route::get('', [StatusController::class, 'index'])->name('status.index');
    Route::get('create', [StatusController::class, 'create'])->name('status.showFormCreate');
    Route::post('create', [StatusController::class, 'store'])->name('status.create');
    Route::get('{id}/update', [StatusController::class, 'edit'])->name('status.showFormUpdate');
    Route::post('{id}/update', [StatusController::class, 'update'])->name('status.update');
    Route::get('{id}/detail', [StatusController::class, 'show'])->name('status.detail');
    Route::get('{id}/delete', [StatusController::class, 'destroy'])->name('status.delete');
});

