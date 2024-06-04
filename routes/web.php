<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrnamenController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/dashboard', function () {
    return view('pages.admin-dashboard');
})-> name('dashboard');

Route::controller(OrnamenController::class)->prefix('ornamen')->group(function() {
    Route::get('', 'index')->name('ornamen');
});

