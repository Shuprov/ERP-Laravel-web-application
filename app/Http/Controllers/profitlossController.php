<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profit_loss;

class profitlossController extends Controller
{
   
    public function Profitloss(Request $req){
        return view('/Profitloss');
     }




   
    public function profitlossinput(Request $req){
        return view('/profitlossinput');
     }
      //Recievable database list
      public function profitlosslist(Request $req){
         $data = Profit_loss::all();
         return view('/profitlosslist',['profitloss'=>$data]);
      }
      public function submit6(Request $req){
         $data= $req->all();
         Profit_loss::create($data);
         return redirect ('/Profitloss');
     }
    
    
      ///edit//update
      public function edit4($id){
         //echo $id;
         $user4=Profit_loss::find($id);
         return view('/edit4')->with('user4',$user4);
     }
    
     public function update4(Request $req,$id){
         //echo $id;
         $user4=Profit_loss::find($id);
         $user4->projectname=$req->projectname;
         $user4->profit=$req->profit;
         $user4->loss=$req->loss;
         $user4->date=$req->date;
         $user4->save();
    
         return redirect('/profitlosslist');
    
     }
     public function delete4($id)
       {
           Profit_loss::find($id)->delete();
           return redirect()->back();
       }
    
    
    



}
