<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\landingPageHome;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('landing-page-home'));
});

Route::get("home",[landingPageHome::class,'index'])->name('landing-page-home');
Route::get('/app/login',[loginController::class,'firstLogin'])->name('login.first-login');
Route::get('/app/ContactForm',[ContactController::class,'formLogic'])->name('app.ContactForm');
Route::get('/app/subscriptionNewsLetter',[ContactController::class,'snlLogic'])->name('app.subscriptionNewsLetter');



Route::fallback(function () {
    if (app()->isDownForMaintenance()) {
        return response()->view('layout.maintenance', [], 503);
    }

    return response()->view('layout.404', [], 404);
});
