<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/send-email/{to}/{title}/{body}', [MainController::class, 'index']);

// felicianoferdinand05@gmail.com
http://mailsender.test/send-email/felicianoferdinand05@gmail.com/Your%20Title/This%20is%20the%20email%20body