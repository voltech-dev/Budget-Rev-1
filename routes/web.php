<?php
use App\Http\Controllers\SalesorderController;
use App\Http\Controllers\TurnoverController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SalesorderController::class, 'dashboard'])->name('dashboard');
Route::post('/dashboard', [SalesorderController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard', [SalesorderController::class, 'dashboard'])->name('dashboard');

############################## Salesorder ##############################
Route::get('/salesorderlist', [SalesorderController::class, 'salesorderlist']);
Route::get('/salesorder', [SalesorderController::class, 'salesorder'])->name('/salesorder');
Route::post('/salesorder', [SalesorderController::class, 'store']);
Route::get('/sales_edit/{id}/{unit}',[SalesorderController::class, 'sales_edit']);
Route::post('/salesupdate/{id}',[SalesorderController::class, 'salesupdate']);
Route::get('/sales_view/{id}/{unit}',[SalesorderController::class, 'sales_view']);
Route::get('/salesfinancial_year',[SalesorderController::class, 'checkfinancial_year']);
############################## Turnover #####################################
Route::get('/turnover_entry', [TurnoverController::class, 'turnover_entry']);
Route::get('/turnoverlist', [TurnoverController::class, 'turnoverlist']);
Route::post('/turnoverstore', [TurnoverController::class, 'turnoverstore']);
Route::get('/turnover_view/{id}/{unit}',[TurnoverController::class, 'turnover_view']);
Route::get('/turnover_edit/{id}/{unit}',[TurnoverController::class, 'turnover_edit']);
Route::post('/turnoverupdate/{id}',[TurnoverController::class, 'turnoverupdate']);
Route::get('/turnover_financial_year',[TurnoverController::class, 'checkfinancial_year']);
################################# Collection ##########################################

Route::get('/collectionlist', [CollectionController::class, 'collectionlist']);
Route::get('/collection_entry', [CollectionController::class, 'collection_entry'])->name('/collection_entry');
Route::post('/collectionstore', [CollectionController::class, 'collectionstore']);
Route::get('/collection_view/{id}/{unit}',[CollectionController::class, 'collection_view']);
Route::get('/collection_edit/{id}/{unit}',[CollectionController::class, 'collection_edit']);
Route::post('/collectionupdate/{id}',[CollectionController::class, 'collectionupdate']);
Route::get('/collection_financial_year',[CollectionController::class, 'checkfinancial_year']);

Route::get('/companylist', [SetupController::class, 'companylist']);
Route::get('/company_destroy/{id}', [SetupController::class, 'company_destroy']);
Route::get('/companycreate', [SetupController::class, 'companycreate'])->name('/companycreate');

Route::get('/division', [SetupController::class, 'division']);
Route::get('/divisionlist', [SetupController::class, 'divisionlist']);

Route::post('/company', [SetupController::class, 'company']);
Route::get('/company_edit/{id}', [SetupController::class, 'company_edit']);
Route::post('/companyupdate/{id}',[App\Http\Controllers\SetupController::class, 'companyupdate']);
Route::get('/companyview/{p}',[App\Http\Controllers\SetupController::class, 'company_view']);
Route::get('/unit_destroy/{id}', [SetupController::class, 'unit_destroy']);
Route::get('/division', [SetupController::class, 'division']);
Route::get('/division_destroy/{id}', [SetupController::class, 'division_destroy']);
Route::get('/viewdivision', [SetupController::class, 'viewdivision']);
Route::get('/divisionlist', [SetupController::class, 'divisionlist']);
Route::post('/divisionstore', [SetupController::class, 'division_store']);

Route::get('/unit', [SetupController::class, 'unit']);
Route::get('/unitlist', [SetupController::class, 'unitlist']);
Route::get('/unitedit/{companyname}/{unit}', [SetupController::class, 'unit_edit']);

Route::get('/unitview/{id}/{unit}', [SetupController::class, 'unit_view']);
Route::post('/unitupdate/{id}',[SetupController::class, 'unitupdate']);
Route::get('/companyid', [SetupController::class, 'divisiondetails']);
Route::get('/fetchdivision', [SetupController::class, 'fetchdivision']);
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
Route::get('/fy_edit/{id}', [SetupController::class, 'finyear_edit']);
Route::post('/fyupdate/{id}', [SetupController::class, 'finyear_update']);
Route::get('/finyear_destroy/{id}', [SetupController::class, 'finyear_destroy']);
//Route::get('/',[SalesorderController::class, 'dashboard_sales']);

Route::get('/financialyear',[DashboardController::class, 'sales_financialyear']);
Route::post('/financialyear',[DashboardController::class, 'sales_financialyear']);
