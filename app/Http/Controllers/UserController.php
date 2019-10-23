<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view ('User.index');
    }

    public function signup(){
        return view ('User.signup');
    }
}
