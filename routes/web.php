<?php

use App\Http\Controllers\BidController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EntityController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

//Dashboard Page
Route::get('/', [DashboardController::class, 'index']);
//-----------------------------------------------------------------

//Start Bids Routes------------------------------------------------
//All Bids
Route::get('/bids', [BidController::class, 'index']);

//Bid's details
Route::get('/bids/details', [BidController::class, 'bidDetails']);
//end Bids Routes--------------------------------------------------

//************************************************************** */

//start Entity Routes----------------------------------------------
//All Entities
Route::get('/entities', [EntityController::class, 'index']);

//Entity's profile
Route::get('/entities/profile', [EntityController::class, 'entityProfile']);
//end Entity Routes------------------------------------------------

//************************************************************** */

