<?php
use App\Http\Controllers\SalesorderController;

use Illuminate\Support\Facades\Route;
 Route::get('/', function () {
   return view('dashboard');
 });
 Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     return view('dashboard');
 })->name('dashboard');
 Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
     return view('dashboard');
 })->name('dashboard');


############################## Salesorder ##############################
Route::get('/salesorderlist', [SalesorderController::class, 'salesorderlist']);
Route::get('/salesorder/', [SalesorderController::class, 'salesorder'])->name('/salesorder');
Route::post('/salesorder', [SalesorderController::class, 'store']);
Route::get('/sales_edit/{id}',[SalesorderController::class, 'sales_edit']);
Route::post('/salesupdate/{id}',[SalesorderController::class, 'salesupdate']);
Route::get('/sales_view/{id}',[App\Http\Controllers\SalesorderController::class, 'sales_view']);

Route::get('/turnoverlist', [SalesorderController::class, 'turnoverlist']);
Route::get('/turnover/', [SalesorderController::class, 'turnover'])->name('/turnover');
Route::post('/turnover', [SalesorderController::class, 'turnover_store']);
Route::get('/turn_edit/{id}',[SalesorderController::class, 'turn_edit']);
Route::post('/turnupdate/{id}',[App\Http\Controllers\SalesorderController::class, 'turnupdate']);
Route::get('/turn_view/{p}',[App\Http\Controllers\SalesorderController::class, 'turn_view']);

Route::get('/collectionlist', [SalesorderController::class, 'collectionlist']);
Route::get('/collection_edit/{id}',[App\Http\Controllers\SalesorderController::class, 'collection_edit']);
Route::get('/collection', [SalesorderController::class, 'collection'])->name('/collection');
Route::post('/collectionupdate/{id}',[App\Http\Controllers\SalesorderController::class, 'collectionupdate']);
Route::get('/collection_view/{p}',[App\Http\Controllers\SalesorderController::class, 'collection_view']);
Route::post('/collection', [SalesorderController::class, 'collection_store']);

Route::get('/companylist', [SalesorderController::class, 'companylist']);
Route::get('/companycreate', [SalesorderController::class, 'companycreate'])->name('/companycreate');

Route::get('/division', [SalesorderController::class, 'division']);
Route::get('/viewdivision', [SalesorderController::class, 'viewdivision']);
Route::post('/company', [SalesorderController::class, 'company']);
Route::get('/company_edit/{id}', [SalesorderController::class, 'company_edit']);
Route::post('/companyupdate/{id}',[App\Http\Controllers\SalesorderController::class, 'companyupdate']);
Route::get('/companyview/{p}',[App\Http\Controllers\SalesorderController::class, 'company_view']);

Route::get('/division', [SalesorderController::class, 'division']);
Route::get('/viewdivision', [SalesorderController::class, 'viewdivision']);
Route::get('/divisionlist', [SalesorderController::class, 'divisionlist']);
Route::post('/divisionstore', [SalesorderController::class, 'division_store']);
// Route::get('/companyid', [SalesorderController::class, 'divisiondetails']);

Route::get('/unit', [SalesorderController::class, 'unit']);
Route::get('/companyid', [SalesorderController::class, 'divisiondetails']);
Route::post('/unitstore', [SalesorderController::class, 'unitstore']);
Route::get('/compdivision', [SalesorderController::class, 'divisiondetails']); 

Route::get('/divisionedit/{id}', [SalesorderController::class, 'division_edit']);
Route::get('/divisionview/{p}',[App\Http\Controllers\SalesorderController::class, 'division_view']);
Route::post('/divisionupdate/{id}',[App\Http\Controllers\SalesorderController::class, 'division_update']);

Route::get('/salesturnover', [SalesorderController::class, 'salesturnover']);
Route::post('/searchsales', [SalesorderController::class, 'searchsales']);
Route::post('/searchturnover', [SalesorderController::class, 'searchturnover']);
Route::post('/searchcollection', [SalesorderController::class, 'searchcollection']);