<?php

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

Route::prefix('investments')->group(function() {
    Route::get('/', 'InvestmentsController@index');
    Route::get('/deleteInvestment/{id}','InvestmentsController@destroy');
    Route::post('/updateInvestment','InvestmentsController@update');
    Route::post('/createInvestment','InvestmentsController@store');
    Route::get('/viewAllInvestmentPlans','InvestmentsController@viewAll');
    Route::get('/deactivatePlan/{id}','InvestmentsController@deactivatePlan');
    Route::get('/getPlan/{id}','InvestmentsController@getPlan');
});
