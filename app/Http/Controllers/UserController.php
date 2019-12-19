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

<<<<<<< HEAD

   public function index()
    {
        return view('user');
    }

    public function view_tickets()
    {
        return view('user.view_tickets');
    }



=======
    public function register(Request $request)
    {
        $checkSuccess = DB::table('users')->insert(['fname'=>$request['fname'],'lname'=>$request['lname'],'email'=>$request['email'],'password'=>$request['password']]);
        var_dump($checkSuccess);die();
    }
>>>>>>> cf13b8c15dcb4b2bc1f989dd8efa374404663836
}
