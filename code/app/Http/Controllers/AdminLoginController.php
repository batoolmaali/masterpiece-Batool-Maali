<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class AdminLoginController extends Controller
{

    public function __construct(){

        $this->middleware('guest:admin');

    }

    public function showLoginForm(){
        return view ('auth.admin_login');
    }

    public function login(){
        return true;
    }
}
