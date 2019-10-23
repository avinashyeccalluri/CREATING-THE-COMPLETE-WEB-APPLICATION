<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        return view ('User.index');
    }

    public function signup(){
        return view ('User.signup');
    }
    public function storesignup(User $User){
        request()->validate([
            'name'=>['required','min:3','max:10'],
            'email'=>['required','min:3','max:50'],
            'password'=>['required','min:3','max:10','alphaNum'] 
        ]);
        $User->create(request(['name','email','password'])); 
        return redirect('/user');

        // request()->validate(['firstname'=>['required','min:3','max:10'],'lastname'=>['required','min:3','max:10'],'mobilenumber'=>['required','min:3','max:10']]);
        // $User->create(request(['name','email','password']));        
        // return redirect('/student');
    }
}
