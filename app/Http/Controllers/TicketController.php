<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Ticket;
use Auth;
use App\Comments;
use App\Category;
use App\Priority;
use App\CategoryList;



class TicketController extends Controller
{
    public function index(Request $request)
    {
        $user_id = Auth::user()->id;
        $tic_id = Ticket::count();
        $tic_id = $tic_id + 1;
        $data = "";
        $category = $request['category_id'];
        $count = count($request['category_id']);

        Ticket::create([
            'subject'=>$request['subject'],
            'description'=>$request['description'],
            'priority_id'=>$request['priority_id'],
            'user_id'=>$user_id,
            'status_id'=>'1',
            'assign_to'=>'0',
        ]);

        for ($i=0; $i < $count; $i++) { 
            CategoryList::create([
            'tic_id'=>$tic_id,
            'cat_id'=>$category[$i],
            ]);
        }
        
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

    public function categories(Request $request)
    {
        if($request['category']==0)
        {
            $ticket = Ticket::all();
        }
        else
        {
            $data = CategoryList::where('cat_id',$request['category'])->get();
            $count = count($data);
            foreach($data as $data)
            {
                $ticket = $data->ticket()->get();
            }
        }

        $category = Category::all();
        $priority = Priority::all();
        return view('user.view-ticket',compact('ticket','category','priority'));        

    }
}
