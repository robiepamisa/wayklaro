<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Ticket;
use Auth;
use DB;

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
            $ticket = Ticket::where('assign_to',$id)->get();
        }
        else
        {
            $ticket = Ticket::where('assign_to',$id)->get();
        }
    	return view('employee',compact('ticket','count'));
    }

    public function search(Request $request)
    {
        $ticket = Ticket::where('ticket_id','like',$request['key'].'%')
                                    ->orWhere('subject','like',$request['key'].'%')
                                    ->orWhere('description','like',$request['key'].'%')
                                    ->get();
        return view('employee',compact('ticket'));
    }
}
