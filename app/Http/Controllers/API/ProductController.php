<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product_Table;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products= Product_Table::all();
       
        return response()->json([
            'status'=>200,
            'products'=>$products
        ]);
    }

    public function store(Request $request){
        $product= new Product_Table;
        $product->product_name= $request->input('product_name');
        $product->MRP= $request->input('MRP');
        // $product->email= $request->input('email');
        // $product->role= $request->input('role');
        $product->save();

        return response()->json([
            'status'=>200,
            'message'=>'Product Added Successfully'
        ]);

    }

    public function edit($id){
        $product=Product_Table::find($id);
        return response()->json([
            'status'=>200,
            'product'=>$product 
        ]);
    }

    public function update(Request $request,$id){
        $product=  Product_Table::find($id);
        $product->product_name= $request->input('product_name');
        $product->MRP= $request->input('MRP');
        // $user->email= $request->input('email');
        // $user->role= $request->input('role');
        $product->update();

        return response()->json([
            'status'=>200,
            'message'=>'Product Updated Successfully'
        ]);
    }

    public function destroy($id){
        $product= Product_Table::find($id);
        $product->delete();

        return response()->json([
            'status'=>200,
            'message'=>'Product Deleted Successfully'
        ]);
    }
}
