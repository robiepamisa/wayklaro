<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assigned_ticket;
use App\Ticket;
use App\User;
use App\Status;
use App\Priority;

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
        $employees = User::where('user_role', 2)->get();
        $tickets = Ticket::all();
        $status = Status::all();
        $priority = Priority::all();
        return view('admin',compact('tickets','employees','status','priority'));
      
    }
    public function store()
    {
      dd(request('ticket_id'));
    }
}
