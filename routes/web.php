<?php

use App\Http\Controllers\BidController;
use App\Http\Controllers\BidderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\UserController;
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

//start Bidder Routes----------------------------------------------
//All bidders
Route::get('/bidders', [BidderController::class, 'index']);

//bidder's profile
Route::get('/bidders/profile', [BidderController::class, 'bidderProfile']);
//end bidder Routes------------------------------------------------

//************************************************************** */

//start User Routes----------------------------------------------

//user login
Route::get('/users/login', [UserController::class, 'login']);
//end User Routes------------------------------------------------

//All users
Route::get('/users', [UserController::class, 'index']);

//bidder's profile
Route::get('/users/profile', [UserController::class, 'userProfile']);
//end User Routes------------------------------------------------

//************************************************************** */
