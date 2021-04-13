<?php
use App\Http\Controllers\SalesorderController;

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('dashboard');
});

############################## Salesorder ##############################
Route::get('/salesorder', [SalesorderController::class, 'salesorder']);