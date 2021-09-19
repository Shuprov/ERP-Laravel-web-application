<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects_Add;

class projectsController extends Controller
{
    public function Projectadd(Request $req){
        return view('Projectaccountant.Projectadd');
     }

     public function projectsadd(Request $req){
        return view('projectsadd');
     }
      //Recievable database list
  public function projectslist(Request $req){
    $data = Projects_Add::all();
    return view('projectslist',['projects'=>$data]);
 }
 public function submit7(Request $req){
    $data= $req->all();
    Projects_Add::create($data);
    return redirect ('/Projectadd');
}

 ///edit//update
 public function edit5($id){
    //echo $id;
    $user5=Projects_Add::find($id);
    return view('edit5')->with('user5',$user5);
}

public function update5(Request $req,$id){
    //echo $id;
    $user5=Projects_Add::find($id);
    $user5->projectname=$req->projectname;
    $user5->shortdescription=$req->shortdescription;
    $user5->projectleader=$req->projectleader;
    $user5->projectbudget=$req->projectbudget;
    $user5->totalamountspent=$req->totalamountspent;
    $user5->duration=$req->duration;
    $user5->save();

    return redirect('/projectslist');

}
public function delete5($id)
  {
      Projects_Add::find($id)->delete();
      return redirect()->back();
  }


}
