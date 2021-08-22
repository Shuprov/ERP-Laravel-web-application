<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class RegistrationController extends Controller
{
    //
    public function index(){
        //echo "this is register page";
        return view('registration');
    }



    public function verify(Request $req){

    $validation= Validator::make($req->all(),[
        'username'=>'required|min:5',
        'email'=>'required|max:5',
        'password'=>'required|min:5'
    ]);

    if($validation->fails())
    {
       // return redirect('/login')->with('errors',$validation->errors());
        return back()
        ->with('errors',$validation->errors())
        ->withInput()
        ;

    }
}
}
