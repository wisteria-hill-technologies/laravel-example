<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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

Route::get('/', [TodoListController::class, 'index']);

Route::post('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');  // [TodoListController::class, 'saveItem'] Specify here controller and its method

Route::post('/markCompleteRoute', [TodoListController::class, 'markComplete'])->name('markComplete');  // [TodoListController::class, 'saveItem'] Specify here controller and its method
