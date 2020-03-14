<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
use App\Cart;
use App\Category;
use App\Products;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }

    public function home()
    {
        $product = Products::all();
        $category = Category::where('status','ACTIVE')->get();
        
        if(Auth::check())
        {
        $id = Auth::user()->id;
        $cart = Cart::where('user_id',$id)->get();
        $count = Count($cart);
        return view('index',compact('category','product','cart','count'));

        }
        
        
        return view('index',compact('category','product'));
    }
    
    

    public function viewProduct()
    {
       $product = Products::all();
       $category = Category::where('status','ACTIVE')->get();
        return view('admin.product',compact('product','category'));
    }

    public function userStatus(Request $request)
    {
        User::Where('id',$request['_id'])
                    ->update(['user_status'=>$request['_status']]);
        return back()->with(['success'=>'Successfully Updated.']);
    }

    public function viewAbout(){
        $category = Category::where('status','ACTIVE')->get();
        return view('aboutus',compact('category'));
    }
}
