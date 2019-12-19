<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
       
        $checkLogin = DB::table('users')->where(["email"=>$request['email'],"password"=>$request['password']])->get();
        if(count($checkLogin) > 0)
        {
            echo"Login successful";
        }
        else
        {
            echo"Login failed wrong data passed";
        }
    }

    public function register(Request $request)
    {
        
    }
}
