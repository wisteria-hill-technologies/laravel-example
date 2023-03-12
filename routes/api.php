<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/send-email', function () {
    Log::info('test mail endpoint!');
    Mail::raw('This is a test!....', function($message) {
        $message->to('n_fujioka03@hotmail.com')->subject('Testing 123...');
    });
    return 'email sent';
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
