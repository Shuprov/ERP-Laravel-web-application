<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message_admin;

class ConnectAdminController extends Controller
{
   
    public function Connectwithadmin(Request $req){
        return view('Connectionandsummary.Connectwithadmin');
     }

     public function contact(Request $req){
        $data = Message_admin::all();
        return view('Messagedata/Messagetoadmin',['messages'=>$data]);
     }
     public function submit4(Request $req){
        $data= $req->all();
        Message_admin::create($data);
        return redirect ('/Home');
    }
  
  
     ///edit//update
     public function edit2($id){
        //echo $id;
        $user2= Message_admin::find($id);
        return view('edit2')->with('user2',$user2);
    }
  
    public function update2(Request $req, $id){
        //echo $id;
        $user2= Message_admin::find($id);
        $user2->name=$req->name;
        $user2->email=$req->email;
        $user2->subject=$req->subject;
        $user2->message=$req->message;
       
       
        $user2->save();
  
        return redirect('/Messagetoadmin');
  
    }
    public function delete2($id)
      {
          Message_admin::find($id)->delete();
          return redirect()->back();
      }
}
