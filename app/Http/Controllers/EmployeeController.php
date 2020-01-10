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
        
        $tickets = Ticket::where('assign_to',$id)->get();
        

    	return view('employee',compact('tickets'));
    }

    public function statusSubmit(Request $request)
    {
        Ticket::where('ticket_id',$request['ticket_id'])
                ->update(['status_id'=>$request['status_id']]);
                return redirect(url("employee"));
    }
}
