<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index()
   {
   	return view('admin');
   }

   public function create_user()
   {
   	return view('admin.create_user');
   }
   
}
