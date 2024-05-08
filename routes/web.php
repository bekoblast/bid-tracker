<?php

use Illuminate\Support\Facades\Route;

//Testing Branches
//Dashboard Page
Route::get('/', function () {
    return view('dashboard');
});
//-----------------------------------------------------------------

//Bids Routes------------------------------------------------------
//All Bids
Route::get('/bids', function () {
    return view('bids.all');
});

//Bid's details
Route::get('/bids/details', function () {
    return view('bids.details');
});

//Entity Routes----------------------------------------------------
//All Entities
Route::get('/entities', function () {
    return view('entities.all');
});

//Entity's profile
Route::get('/entities/profile', function () {
    return view('entities.profile');
});
//-----------------------------------------------------------------
