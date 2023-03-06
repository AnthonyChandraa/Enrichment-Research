<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index_login(){
        return view('pages.auth.login');
    }

    public function index_register(){
        return view('pages.auth.register');
    }

    public function login(Request $request){

    }

    public function register(Request $request){

    }

    public function logout(){
        Auth::logout();
        Session::flush();
    }
}
