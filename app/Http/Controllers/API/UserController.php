<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User_Table;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $users= User_Table::all();
       
        return response()->json([
            'status'=>200,
            'users'=>$users
        ]);
    }

    public function store(Request $request){
        $user= new User_Table;
        $user->username= $request->input('name');
        $user->password= $request->input('password');
        $user->email= $request->input('email');
        $user->role= $request->input('role');
        $user->save();

        return response()->json([
            'status'=>200,
            'message'=>'User Added Successfully'
        ]);

    }

    public function edit($id){
        $user=User_Table::find($id);
        return response()->json([
            'status'=>200,
            'user'=>$user 
        ]);
    }

    public function update(Request $request,$id){
        $user=  User_Table::find($id);
        $user->username= $request->input('name');
        $user->password= $request->input('password');
        $user->email= $request->input('email');
        $user->role= $request->input('role');
        $user->update();

        return response()->json([
            'status'=>200,
            'message'=>'User Updated Successfully'
        ]);
    }

    public function destroy($id){
        $user= User_Table::find($id);
        $user->delete();

        return response()->json([
            'status'=>200,
            'message'=>'User Deleted Successfully'
        ]);
    }
}
