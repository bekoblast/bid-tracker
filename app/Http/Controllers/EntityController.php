<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntityController extends Controller
{
    public function index() {
        return view('entities.all');
    }

    //----------------------------------------------
    public function entityProfile() {
        return view('entities.profile');
    }
}
