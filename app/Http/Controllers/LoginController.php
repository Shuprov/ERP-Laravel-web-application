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






use function Psy\debug;
use App\Models\User_Table;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    /*public function verify(){
       echo "posted!";
    }*/
    public function verify(Request $req){
         //dd($req);debug
         //echo "Username is:".$req->email."& password is:".$req->password;
         //session()
         //$req->session()->put('email',$req->email);
        // $req->session()->put('password',$req->password);

        // $email=$req->session()->get('email');
        // $req->session()->flush();
        // $req->session()->forget('email');
        // $email=$req->session()->pull('email');
        // $req->session()->forget('email');
        // $req->session()->has('email');
        // $req->session()->flash('cgpa','4');
        // $req->session()->flash('mode','abc');
        // $cgpa=$req->session()->get('cgpa');
        // $req->session()->keep('cgpa');
        // $req->session()->reflash();



//validation

        $validation= Validator::make($req->all(),[
            'email'=>'required|min:5',
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
        //session()
         //if($req->email==$req->password)

        //  $result= User_Table::all();
         //$result= User::all();
         //dd($result);
        //  print_r($result);
         $result= User_Table::where('email',$req->email)
                              ->where('password',$req->password)
                              ->get();

                              if(count($result)>0)
                              {
                                  //echo "Valid user!";
                                  $req->session()->put('email',$req->email);
                                  //set session or cookie
                                  return redirect('/admin');
                              }
                              else{
                                  //echo "Invalid user!";
                                  $req->session()->flash('msg','Invalid username or password');
                                  //return redirect('/login');
                                  return redirect('/login');
                              }


        //  if($req->email==$req->password)
        //  {
        //      //echo "Valid user!";
        //      $req->session()->put('email',$req->email);
        //      //set session or cookie
        //      return redirect('/admin');
        //  }
        //  else{
        //      //echo "Invalid user!";
        //      $req->session()->flash('msg','Invalid username or password');
        //      //return redirect('/login');
        //      return redirect('/login');
        //  }
    }
}

