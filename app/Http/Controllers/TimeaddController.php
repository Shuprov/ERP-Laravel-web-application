<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edit_time;

class TimeaddController extends Controller
{
    public function Timeandexpence(Request $req){
        return view('Timeandexpence');
     }


   ////////database insert,add,delete

 
   public function Timemanagement(Request $req){                            
    return view('Timemanagement');
 }
  //Recievable database list
  public function Timemanage(Request $req){
     $data = Edit_time::all();
     return view('Timeadd',['timeadd'=>$data]);
  }
  public function submit5(Request $req){
     $data= $req->all();
     Edit_time::create($data);
     return redirect ('/Timeandexpence');
 }


  ///edit//update
  public function edit3($id){
     //echo $id;
     $user3=Edit_time::find($id);
     return view('edit3')->with('user3',$user3);
 }

 public function update3(Request $req,$id){
     //echo $id;
     $user3=Edit_time::find($id);
     $user3->projectname=$req->projectname;
     $user3->previoustime=$req->previoustime;
     $user3->newaddedtime=$req->newaddedtime;
     $user3->save();

     return redirect('/Timeadd');

 }
 public function delete3($id)
   {
       Edit_time::find($id)->delete();
       return redirect()->back();
   }




}
