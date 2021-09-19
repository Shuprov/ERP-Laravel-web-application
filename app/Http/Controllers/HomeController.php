<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Homepage(Request $req){
        return view('Home');
     }
     public function check(Request $req){
        echo "welcome only user Ridowan Ahad";
     }
     public function Financialaccounting(Request $req){
      return view('Financialaccounting');
   }
   public function Financialclose(Request $req){
      return view('Financialclose');
   }
   public function webpage(Request $req){
      return view('AccountantPage');
   }
   
   
   
  
   public function Datamanagement(Request $req){
      return view('Datamanagement');
   }
   public function Taxaccounting(Request $req){
      return view('Taxaccounting');
   }
   public function Manageinventory(Request $req){
      return view('Manageinventory');
   }
   public function Revenuemanagement(Request $req){
      return view('Revenuemanagement');
   }
   public function Projects(Request $req){
      return view('Projectaccountant.Projects');
   }
 
   public function Projectdetail(Request $req){
      return view('Projectaccountant.Projectdetail');
   }
   public function Projectedit(Request $req){
      return view('Projectaccountant.Projectedit');
   }

   public function Summary(Request $req){
      return view('Connectionandsummary.Summary');
   }
   
  //////////// loginsystem
   public function index(){
      echo "Accountant login";
     return view('loginsystem');
  }
  public function verify(Request $req){
    //dd($req);
   if($req->uname == $req->password){
      //session or cookie
      return redirect('/Home');
   }else{
      echo "invalid user!";
   }

  }
public function ahad(Request $req){ //session
  if($req->session()->has('name')){
   return view('Home');
}
else{
   $req->session()->flash('msg','Invalid request');
   return redirect('/login');
}
}
   




}

