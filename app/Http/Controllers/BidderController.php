<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidderController extends Controller
{
    public function index() {
        return view('bidders.all');
    }

    //----------------------------------------------
    public function bidderProfile() {
        return view('bidders.profile');
    }
}
