<?php

namespace App\Http\Controllers;

use App\Priority;
use App\User;
use Auth;
use App\Ticket;
use Illuminate\Http\Request;
use App\Category;


class UserController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function index()
    {
        $priority = Priority::all();
        $category = Category::all();
    	return view('user',compact('priority','category'));
    }
    public function create()
    {
    	
    }

   public function viewTicket()
   {
        $id = Auth::user()->id;
        $ticket = Ticket::Where('user_id',$id)->paginate(5);
        
        $priority = Priority::all();
        $category = Category::all();

       
        
       return view('user.view-ticket',compact('ticket','priority','category'));
   }

}
