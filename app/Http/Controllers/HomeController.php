<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assigned_ticket;
use App\Ticket;
use App\User;
use App\Status;
use App\Priority;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(isset($_GET['id']))
        {   
            Ticket::where('ticket_id',$_GET['id'])
                        ->update(['assign_to'=>$_GET['eid']]);
        }

        $ticket = Ticket::all();
        
        $employees = User::where('user_role', 2)->get();
        // $signedTicket = DB::table('tickets')
        //                 ->join('users','tickets.assign_to','users.id')
        //                 ->join('status','tickets.status_id','status.id')
        //                 ->get();
        
        
       
        
        
        return view('admin',compact('employees','ticket'));
      
    }
    public function store()
    {
      dd(request('ticket_id')); 
    }
}
