<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Ticket;
use Auth;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = Auth::id();
        
        $tickets = Ticket::where('assign_to',$id)->paginate(5);
        

    	return view('employee',compact('tickets'));
    }
}
