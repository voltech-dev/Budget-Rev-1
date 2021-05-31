<?php
use App\Http\Controllers\SalesorderController;
use App\Http\Controllers\SetupController;

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
Route::get('/salesorder', [SalesorderController::class, 'salesorder'])->name('/salesorder');
Route::post('/salesorder', [SalesorderController::class, 'store']);
Route::get('/sales_edit/{id}/{unit}',[SalesorderController::class, 'sales_edit']);
Route::post('/salesupdate',[SalesorderController::class, 'salesupdate']);
Route::get('/sales_view/{id}/{unit}',[App\Http\Controllers\SalesorderController::class, 'sales_view']);

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

Route::get('/companylist', [SetupController::class, 'companylist']);
Route::get('/companycreate', [SetupController::class, 'companycreate'])->name('/companycreate');

Route::get('/division', [SetupController::class, 'division']);
Route::get('/divisionlist', [SetupController::class, 'divisionlist']);

Route::post('/company', [SetupController::class, 'company']);
Route::get('/company_edit/{id}', [SetupController::class, 'company_edit']);
Route::post('/companyupdate/{id}',[App\Http\Controllers\SetupController::class, 'companyupdate']);
Route::get('/companyview/{p}',[App\Http\Controllers\SetupController::class, 'company_view']);

Route::get('/division', [SetupController::class, 'division']);
Route::get('/viewdivision', [SetupController::class, 'viewdivision']);
Route::get('/divisionlist', [SetupController::class, 'divisionlist']);
Route::post('/divisionstore', [SetupController::class, 'division_store']);

Route::get('/unit', [SetupController::class, 'unit']);
Route::get('/unitlist', [SetupController::class, 'unitlist']);
Route::get('/unitedit/{companyname}/{unit}', [SetupController::class, 'unit_edit']);
Route::get('/unitview/{id}/{unit}', [SetupController::class, 'unit_view']);
Route::post('/unitupdate/{id}',[SetupController::class, 'unitupdate']);
Route::get('/companyid', [SetupController::class, 'divisiondetails']);
Route::get('/divisionid', [SetupController::class, 'fetchdivision']);
Route::post('/unitstore', [SetupController::class, 'unitstore']);

Route::get('/divisionedit/{id}/{division}', [SetupController::class, 'division_edit']);
Route::get('/divisionview/{id}/{division}',[SetupController::class, 'division_view']);
Route::post('/divisionupdate/{id}',[App\Http\Controllers\SetupController::class, 'divisionupdate']);

Route::get('/saleslist', [SalesorderController::class, 'saleslist']);
Route::post('/searchsales', [SalesorderController::class, 'searchsales']);
Route::post('/searchturnover', [SalesorderController::class, 'searchturnover']);
Route::post('/searchcollection', [SalesorderController::class, 'searchcollection']);

Route::get('/userlist', [SalesorderController::class, 'userlist']);
Route::get('/usercreate', [SalesorderController::class, 'usercreate']);


Route::get('/fylist', [SetupController::class, 'fylist']);
Route::get('/fycreate', [SetupController::class, 'fycreate']);
Route::post('/fystore', [SetupController::class, 'fystore']);
