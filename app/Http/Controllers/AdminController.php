<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        return view ('Admin.index');
    }
    public function signup(){
        return view ('Admin.signup');
    }
    public function storesignup(){
        return view ('Admin.index');
    }
}
