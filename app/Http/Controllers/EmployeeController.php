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
        $count = Ticket::where('assign_to',$id)->count();
        if($count > 5)
        {
            $ticket = Ticket::where('assign_to',$id)->paginate(5);
        }
        else
        {
            $ticket = Ticket::where('assign_to',$id)->get();
        }
    	return view('employee',compact('ticket','count'));
    }
}
