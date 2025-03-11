<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HCPController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\FlagAppController;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */


Route::get('/login', function () {

    session([
     'username' => "USER",
       ]);
    return view('home');
});

Route::get('/', function () {
    session([
        'username' => "USER",
    ]);
return view('home');
});

Route::get('list/country', [FlagAppController::class, 'listCountry'])->name("listCountry");

Route::get('/view/glmappings', [FlagAppController::class, 'viewGLMapping'])->name("viewGLMapping");
;
Route::get('glmapping/view/{id}', [FlagAppController::class, 'glmappingView']);
Route::get('glmapping/edit/{id}', [FlagAppController::class, 'glmappingLoadEdit']);
Route::get('glmapping/delete/{id}', [FlagAppController::class, 'glmappingDelete']);
Route::get('/consolidated/general/ledger', [FlagAppController::class, 'consolidatedGeneralLedger'])->name("consolidatedGeneralLedger");
Route::get('/consolidated/adjust/{id}', [FlagAppController::class, 'consolidatedGeneralLedgerAdjust'])->name("consolidatedGeneralLedgerAdjust");
Route::get('/consolidated/delete/{id}', [FlagAppController::class, 'consolidatedGeneralLedgerDelete'])->name("consolidatedGeneralLedgerDelete");
Route::get('/consolidated/view/{id}', [FlagAppController::class, 'consolidatedGeneralLedgerView'])->name("consolidatedGeneralLedgerView");
Route::get('/consolidated/map/status/{id}', [FlagAppController::class, 'consolidatedGeneralLedgerMapStatus'])->name("consolidatedGeneralLedgerMapStatus");

Route::get('/income/statement', [FlagAppController::class, 'incomeStatement'])->name("incomeStatement");

Route::get('/trial/balance', [FlagAppController::class, 'trialBalance'])->name("trialBalance");
Route::get('/fin/position', [FlagAppController::class, 'statementOfFinPosition'])->name("statementOfFinPosition");

Route::get('regulatory/reports', [FlagAppController::class, 'regulatoryReports'])->name("regulatoryReports");

//============Post=========================================================================================
Route::post('/login', [FlagAppController::class, 'login']);
Route::post('/add/glmappings', [FlagAppController::class, 'addGLMappings']);
Route::post('/edit/glmappings', [FlagAppController::class, 'glmappingEdit'])->name("glmappingEdit");
Route::post('/upload/cgl', [FlagAppController::class, 'uploadCGL'])->name("uploadCGL");
Route::post('load/trial/balance', [FlagAppController::class, 'LoadTrialBalance'])->name("LoadTrialBalance");
Route::post('journal/entry/gl', [FlagAppController::class, 'journalentrygl'])->name("journalentrygl");
Route::post('/gl/leaf/desc', [FlagAppController::class, 'getGLLeafdesc'])->name("getGLLeafdesc");
Route::post('journal/entry/gl/leaf/desc', [FlagAppController::class, 'getGLLeafdesc'])->name("getGLLeafdesc2");
Route::post('journal/entry/post', [FlagAppController::class, 'postGL'])->name("postGL");

Route::post('load/income/statement', [FlagAppController::class, 'loadIncomeStatement'])->name("loadIncomeStatement");
Route::post('/test/post', [FlagAppController::class, 'testPost'])->name("testPost");
Route::post('/generate/daily/reserves', [FlagAppController::class, 'generateDailyReserves'])->name("generateDailyReserves");



//http://10.170.4.157/accounts-system/public/journal/entry/gl/leaf/desc











