<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $req)
    {
        //check session or cookie
       //return view('admin')->with('id','123'); 
        //return view('admin')->withId('12345');with()= for dynamic value passing
        // return view('admin')
        // ->with('id','123')
        // ->with('name','asifur'); 
       // return view('admin',['id'=>123,'name'=>'asifur']);
       $email=$req->session()->get('email');
        //return view('admin',['id'=>123,'name'=>$email]);
        if($req->session()->has('email')){
            return view('admin',['id'=>123,'name'=>$email]);
        }
        else{
            $req->session()->flash('msg','Invalid request');
            return redirect('/login');
        }

    }
}
