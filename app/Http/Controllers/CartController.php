<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Cart;
use App\User;
use Auth;
use App\Role;
use App\Category;

use DB;
class CartController extends Controller
{
    public function addProduct()
    {
        $category = Category::where('status','ACTIVE')->get();
        return view('admin.addProduct',compact('category'));
    }

    public function uploadProduct(Request $request)
    {
        $image = $request->file('img');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/products');
        $image->move($destinationPath,$input['imagename']);
        Products::create([
            'name'=>$request['name'],
            'description'=>$request['description'],
            'category_id'=>$request['Category'],
            'price'=>$request['price'],
            'image_path'=>$input['imagename'],
        ]);
        
        return redirect(url('/admin/product'));
    }

    public function accounts()
    {
        $user = User::where('status','ACTIVE')->get();
       
        
        return view('admin.viewAccounts',compact('user'));

    }

    public function addToCart()
    {
        return view("index");
    }
    public function addToCartPost(Request $request)
    {
        $dataEntry = $request->all();
        $id = Auth::user()->id;
        if(Cart::where('user_id',$id)->where('product_id',$dataEntry['productID'])->count())
        {
           $data = Cart::where('user_id',$id)->where('product_id',$dataEntry['productID'])->first();
           $qty = $data->qty + 1;
           Cart::where('user_id',$id)->where('product_id',$dataEntry['productID'])->update(['qty'=>$qty]);
        }
        else
        {
            Cart::create([
                'user_id'=>$id,
                'product_id'=>$dataEntry['productID'],
                'qty'=>$dataEntry["qty"],
            ]);
        }
        

        $data = Cart::where('user_id',$id)->get();
        $htm= "";
        $total_product = count($data);
        $total_amount = 0;
        $url = url('/');
        foreach($data as $d)
        {
            $htm .='<li class="header-cart-item">
                <div class="header-cart-item-img">
                    <img src="'.$dataEntry['baseUrl']. $d->product->image_path . '" alt="IMG">
                </div>

                <div class="header-cart-item-txt">
                    <a href="#" class="header-cart-item-name">
                        '. $d->product->name .'
                    </a>

                    <span class="header-cart-item-info">
                    ' . $d->qty . ' x ₱' . $d->product->price . '
                    </span>
                </div>
            </li>';

         $total_amount = $total_amount+$d->qty * floatVal($d->product->price);
        }

        $data =([
            'cart_items'=>$htm,
            'total_amount'=>round($total_amount,2),
            'total_product' => $total_product,
        ]);
        return response()->json($data);

    }

    public function viewCartPage()
    {
        $id = Auth::user()->id;
        $category = Category::all();
        $data = Cart::where('user_id',$id)->get();
        return view('user.viewCart',compact('data','category'));
    }

    public function productDelete(Request $request)
    {
        Products::where('id',$request['productID'])
                ->update(['status'=>'INACTIVE']);
        

        return back();
    }
    public function editProduct($productID)
    {
        $product = Products::where('id',$productID)->get();
        return view('admin.edit-product',compact('product'));
    }

    public function saveProduct(Request $request)
    {
        if($request->file('image'))
        {
            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/products');
            $image->move($destinationPath,$input['imagename']);
            Products::where("id",$request['id'])->update([
            'name'=>$request['name'],
            'description'=>$request['description'],
            'category_id'=>$request['category'],
            'price'=>$request['price'],
            'image_path'=>$input['imagename'],
            ]);
            
            return redirect(url('/admin/product'));
        }
        else
        {
            Products::where("id",$request['id'])->update([
                'name'=>$request['name'],
                'description'=>$request['description'],
                'category_id'=>$request['category'],
                'price'=>$request['price'],
                ]);
                
                return redirect(url('/admin/product'));
        }
    }

    
}
