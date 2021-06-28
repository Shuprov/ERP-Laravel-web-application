<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use App\Models\shop;

class shopsController extends Controller
{


    //start shop part.....--
    public function shop()
    {
        $var = shop::all();
        // dd($var);
        return view('customer.allshops', compact('var'));
    }
    //end shop part......

    //start campaigns part.....
    public function camp()
    {
        return view('customer.campaigns');
    }
    //start cart part...
    public function cart(Request $request)
    {
        if (!empty($request->session()->get('name'))) {
            $cart_item = cart::where("customer_id", $request->session()->get('id'))->get();
            return view('customer.cart',compact("cart_item"));
        } else {
            return redirect("/login");
        }
    }
    //end cart  part...
    //start checkout part...
    public function check()
    {
        return view('customer.checkout');
    }
    //end checkout part...

}