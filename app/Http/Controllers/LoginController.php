<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
//use App\User;
use App\Models\User_Table;
class LoginController extends Controller
{
 
   public function login(){
      return view('login');
   }
   
   public function log(Request $req){
  // $req->session()->put('email',$req->uname); //
   //$req->session()->put('pass',$req->psw);
      
      

      
    //  $uname = $req->session()->get('uname');
                  
   //   $rules = [
   //       'uname'=>'required|min:5',
   //       'psw'=>'required|min:8'
   //    ];
   //    $this->validate($req , $rules);
   //    return $req->all();



      ///////////////database

      $result= User_Table::where('name',$req->uname)
                              ->where('pass',$req->psw)
                              ->get();
 
                              if(count($result)>0)
                              {
                                  //echo "Valid user!";
                                 $req->session()->put('name',$req->uname);
                                  //set session or cookie
                                  return redirect('/Home');
                              }
                              else{
                                  //echo "Invalid user!";
                                 $req->session()->flash('msg','Invalid username or password');
                                  
                                  return redirect('/login');
                              }

//////////session///////
    /*  if($req->uname==$req->psw)
         {
             //echo "Valid user!";
             //set session or cookie
             return redirect('/Home');
         }
         else{
             //echo "Invalid user!";
             $req->session()->flash('msg','Invalid username or password');
             //return redirect('/login');
             return redirect('/login');
         }

         
    */     
   }
 /*  $result = User::where('username', $req->uname)
      ->where('password', $req->password)
      ->first();
 */
  
/*public function log(Request $req){
   $req->validate([
      'uname'=>'required'
   ]);
   return $req->input();
}
*/

   

   /*public function verify2(Request $req){
      $req->session()->put('uname',$req->uname);
      $uname = $req->session()->get('uname');
      
   }*/
  
}





