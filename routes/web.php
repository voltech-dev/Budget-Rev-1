<?php
use App\Http\Controllers\SalesorderController;

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('dashboard');
});

############################## Salesorder ##############################
Route::get('/salesorderlist', [SalesorderController::class, 'salesorderlist']);
Route::get('/salesorder/', [SalesorderController::class, 'salesorder'])->name('/salesorder');
Route::post('/salesorder', [SalesorderController::class, 'store']);
Route::get('/sales_edit/{id}',[App\Http\Controllers\SalesorderController::class, 'sales_edit']);
Route::post('/salesupdate/{id}',[SalesorderController::class, 'salesupdate']);
Route::get('/sales_view/{p}',[App\Http\Controllers\SalesorderController::class, 'sales_view']);

Route::get('/turnoverlist', [SalesorderController::class, 'turnoverlist']);
Route::get('/turnover/', [SalesorderController::class, 'turnover'])->name('/turnover');
Route::get('/turn_edit/{id}',[App\Http\Controllers\SalesorderController::class, 'turn_edit']);
Route::post('/turnover', [SalesorderController::class, 'turnover_store']);
Route::post('/turnupdate/{id}',[App\Http\Controllers\SalesorderController::class, 'turnupdate']);
Route::get('/turn_view/{p}',[App\Http\Controllers\SalesorderController::class, 'turn_view']);

Route::get('/collectionlist', [SalesorderController::class, 'collectionlist']);
Route::get('/collection_edit/{id}',[App\Http\Controllers\SalesorderController::class, 'collection_edit']);
Route::get('/collection', [SalesorderController::class, 'collection'])->name('/collection');
Route::post('/collectionupdate/{id}',[App\Http\Controllers\SalesorderController::class, 'collectionupdate']);
Route::get('/collection_view/{p}',[App\Http\Controllers\SalesorderController::class, 'collection_view']);

Route::post('/collection', [SalesorderController::class, 'collection_store']);