<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{ 


   public function index()
    {
        return view('user');
    }

    public function view_tickets()
    {
        return view('user.view_tickets');
    }

}
