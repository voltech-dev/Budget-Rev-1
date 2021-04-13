<?php
use App\Http\Controllers\SalesorderController;

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('dashboard');
});

############################## Salesorder ##############################
Route::get('/salesorder', [SalesorderController::class, 'salesorder']);
Route::post('/salesorder', [SalesorderController::class, 'store']);
Route::get('/turnover', [SalesorderController::class, 'turnover']);
Route::post('/turnover', [SalesorderController::class, 'turnover_store']);
Route::get('/collection', [SalesorderController::class, 'collection']);
Route::post('/collection', [SalesorderController::class, 'collection_store']);