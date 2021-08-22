<?php

namespace App\Http\Controllers;





use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

//use App\Http\Controllers\signinController;
//use Validator;
use App\Models\User_Table;
class signinController extends Controller
{
    public function index1(){
        echo "Accountant signin";
       return view('signin');
    }
  
 

   public function registration(Request $req){
   //    if($req->uname == $req->password){//session
   //       //session or cookie
     
   //    // return redirect()->route('signin')
   //    // ->with('success','registration completed.');
   //  }else{
   //    echo "invalid user!";
   // }

   
   $rules = [
      'name'=>'required|min:5',
      'pass'=>'required|min:8',
      'email'=>'required|@',
      'email'=>'required|.com',
      'phone'=>'required|min:8'
   ];
   $this->validate($req , $rules);
   return $req->all();
}
    public function submit(Request $req){
      $data= $req->all();
      User_Table::create($data);
      return redirect ('/login');
    }
  

      
          /* public function verify3(Request $request){
       $request->validate([
          'name'=> 'required',
          'password'=>'required',
          'email'=>'required'

       ]);

       User::create($request->all());

       return redirect()->route('signin')
                        ->with('success','registration completed.');

    }*/
     /* public function verify1(Request $req){  //redirect to login page woth input
      //dd($req);
     if($req->uname == $req->password){
        //session or cookie
        return redirect('/login');
     }else{
        echo "invalid user!";
     }
 
    }*/


    
}

