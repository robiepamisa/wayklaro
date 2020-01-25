<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Ticket;
use Auth;
use App\Comments;
class TicketController extends Controller
{
    public function index(Request $request)
    {
        $user_id = Auth::user()->id;


        Ticket::create([
            'subject'=>$request['subject'],
            'description'=>$request['description'],
            'priority_id'=>$request['priority_id'],
            'user_id'=>$user_id,
            'status_id'=>'1',
            'assign_to'=>'0',
            'category_id' =>$request['category_id'],
        ]);
        
        return redirect(url('user/view-ticket'));
    }

    public function submitComment(Request $request)
    {
        
        $userId = Auth::id();
        
            Comments::create([
                'ticket_id'=>$request['ticket_id'],
                'author_id'=>$userId,
                'comment'=>$request['comment']
            ]);
        return back();
    }

    public function statusSubmit(Request $request)
    {
        Ticket::where('ticket_id',$request['ticket_id'])
                ->update(['status_id'=>$request['status_id']]);
                return back();
    }
}
