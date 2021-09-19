<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Payment_record;
use App\Models\Payment_record2;


class PaymentrecordController extends Controller
{

    public function Accountspayables(Request $req){
        return view('Accountspayables');
     }

    public function Accountspayable(Request $req){
        return view('Accountspayable');
     }
    //Payable database list
     public function Paymentrecord(Request $req){
        $data = Payment_record::all();
        return view('paymentrecord/payable',['payables'=>$data]);
     }
     public function submit2(Request $req){
        $data= $req->all();
        Payment_record::create($data);
        return redirect ('/Accountspayable');
    }
    ///edit//update
    public function edit($id){
      //echo $id;
      $user=Payment_record::find($id);
      return view('edit')->with('user',$user);
  }

  public function update(Request $req,$id){
      //echo $id;
      $user=Payment_record::find($id);
      $user->name=$req->name;
      $user->uname=$req->uname;
      $user->password=$req->password;
      $user->gmail=$req->gmail;
      $user->payable=$req->payable;
     
      $user->save();

      return redirect('/payable');

  }
  public function delete($id)
    {
        Payment_record::find($id)->delete();
        return redirect()->back();
    }


               /////////////divide////////////////////////////////



    public function Accountsreceivables(Request $req){
      return view('Accountsreceivables');
   }

    public function Accountsreceivable(Request $req){
     return view('Accountsreceivable');
  }
   //Recievable database list
   public function Paymentrecord2(Request $req){
      $data = Payment_record2::all();
      return view('paymentrecord/receivable',['receivables'=>$data]);
   }
   public function submit3(Request $req){
      $data= $req->all();
      Payment_record2::create($data);
      return redirect ('/Home');
  }


   ///edit//update
   public function edit1($id){
      //echo $id;
      $user1=Payment_record2::find($id);
      return view('edit1')->with('user1',$user1);
  }

  public function update1(Request $req,$id){
      //echo $id;
      $user1=Payment_record2::find($id);
      $user1->name=$req->name;
      $user1->uname=$req->uname;
      $user1->password=$req->password;
      $user1->gmail=$req->gmail;
      $user1->receivable=$req->receivable;
     
      $user1->save();

      return redirect('/receivable');

  }
  public function delete1($id)
    {
        Payment_record2::find($id)->delete();
        return redirect()->back();
    }

    ////'validation'////
// public function val(Request $req){
//     $validation= Validator::make($req->all(),[
//       'name'=>'required|min:5',
//       'username'=>'required|min:5',
//       'password'=>'required|min:5',
//       'email'=>'required|min:5',
//       'payable'=>'required|max:5'
//   ]);

//   if($validation->fails())
//   {
//      return redirect('/Accountsreceivable')->with('errors',$validation->errors());
//       return back()
//       ->with('errors',$validation->errors())
//       ->withInput()
//       ;

//   }
//  }

}
