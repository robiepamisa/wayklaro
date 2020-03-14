<?php

namespace App\Http\Controllers;

use App\Priority;
use App\User;
use Auth;
use App\Role;
use App\Logs;
use Illuminate\Support\Facades\Hash;
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
        return view('index');
    }
    public function create()
    {
    	
    }

   public function viewTicket()
   {
        $id = Auth::user()->id;
        $ticket = Ticket::Where('user_id',$id)->orderBy('ticket_id','DESC')->get();
        $priority = Priority::all();
        $category = Category::where('status','ACTIVE')->get();

       
        
       return view('user.view-ticket',compact('ticket','priority','category'));
   }

   public function viewCategories()
   {
       $category = Category::all();

       return view('admin.categories',compact('category'));
   }

   public function statusUpdate(Request $request)
    {
        User::where("id",$request['userID'])
                    ->update(['user_status'=>$request['statusID']]);
        return redirect()->back()->with(['success'=>'Successfully updated!']);
    }

    public function deleteUser(Request $request)
    {
        $user = User::where('id',$request['userID'])->first();
        if($user)
        {
            $user->delete();
        }            
        return back();
    }
    public function addCategory(Request $request)
    {
        Category::create(['category_name'=>$request['categoryName']])->save();

        return back();
    }

    public function addAccount()
    {
        $role = Role::all();
        return view("admin.addAccount",compact("role"));
    }

    public function addAccountSave(Request $request)
    {
        if($request['password']==$request['password2'])
        {
            User::create([
                'name'=>$request['name'],
                'email'=>$request['email'],
                'password'=>$request['password'],
                'user_role'=>$request['Role'],
                'user_status'=>false,

            ]);
            return redirect('admin/accounts')->with('success','successfully added');
        }
        else
        {
            return redirect('admin/accounts')->with('error','error adding account');

        }
        
    }

    public function editUser($userID)
    {
        $user = User::where('id',$userID)->get();
        $role = Role::all();
        return view('admin.edit-profile',compact('user','role'));
    }

    public function showLogs()
    {
        return view('admin.logs');
    }

    public function searchLogs(Request $request)
    {
        
        $from = $request['from_date'];
        $newFrom = Date('Y-m-d',strtotime($from));


        $to_date = $request['to_date'];
        $newTo_Date = Date('Y-m-d',strtotime($to_date));

        
       
            $logs=Logs::whereDate('login_time','>=',$newFrom)
            ->whereDate('login_time','<=',$newTo_Date)->get();

        return view('admin.logs',compact('logs'));
    }
    
    public function saveEditAccount(Request $request,$userID)
    {
        $user = User::where('id',$userID)->get();

        if($request['password']==null && $request['password2']==null)
        {
            User::where('id',$userID)->update(['email'=>$request['email'],'name'=>$request['name'],'user_role'=>$request['Role']]);

            return redirect('admin/accounts')->with('success','Successfully Saved!');
        }
        else
        {
                if($request['password']==$request['password2'])
                {
                    User::where('id',$userID)->update(['email'=>$request['email'],'name'=>$request['name'],'user_role'=>$request['Role'],'password'=>Hash::make($request['password']),]);
                    return redirect('admin/accounts')->with('success','Successfully Saved!');

                }
                else
                {
                    return back()->with('error','Password did not match!');
                }
        }
        
    }

    public function updateCart(Request $request)
    {
        dd($request->all());
    }
}
