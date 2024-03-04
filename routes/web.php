<?php

use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('form.form');
});

Route::post('/enviar', [SaleController::class, 'createNewSaleAction'])->name('enviar');
