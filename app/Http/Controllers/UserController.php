<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //----------------------------------------------
    public function login() {
        return view('users.login');
    }

    //----------------------------------------------
    public function index() {
        return view('users.all');
    }

    //----------------------------------------------
    public function userProfile() {
        return view('users.profile');
    }
    //----------------------------------------------
}
