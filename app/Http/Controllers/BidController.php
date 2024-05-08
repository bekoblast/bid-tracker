<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidController extends Controller
{
    public function index() {
        return view('bids.all');
    }

    //----------------------------------------------
    public function bidDetails() {
        return view('bids.details');
    }
}
