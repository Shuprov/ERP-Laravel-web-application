<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User_Table;

class UserController extends Controller
{
    //
    public function index(Request $req){
        /*$users=[
            [1,'shuprov','123','asif@gmail.com','admin'],
            [1,'ab','12345','as@gmail.com','user'],
            [1,'xyz','12','axy@gmail.com','user']

        ]; indexed array */
        // $users=[
        //     ['id'=>1,'username'=>'shuprov','password'=>'123','email'=>'asif@gmail.com','role'=>'admin'],
        //     ['id'=>2,'username'=>'asif','password'=>'1234','email'=>'abc@gmail.com','role'=>'user'],
        //     ['id'=>3,'username'=>'paul','password'=>'12345','email'=>'xyz@gmail.com','role'=>'user']

        // ];
        // if($req->session()->has('email')){
        //     $users=$this->getUserList();
        //     return view('userlist')->with('userlist',$users);
        // }
        if($req->session()->has('email')){
            $users= User_Table::all();
            return view('userlist')->with('userlist',$users);
        }
        else{
            $req->session()->flash('msg','Invalid request');
            return redirect('/login');
        }

        
        // $users=$this->getUserList();
        //  return view('userlist')->with('userlist',$users);
    }

    public function verify(Request $req){

    $validation= Validator::make($req->all(),[
        'username'=>'required|min:5',
        'password'=>'required|min:5',
        'email'=>'required|min:5',
        'role'=>'required|max:5'
    ]);

    if($validation->fails())
    {
       // return redirect('/login')->with('errors',$validation->errors());
        return back()
        ->with('errors',$validation->errors())
        ->withInput()
        ;

    }
    
}

    public function create(){
        return view('create');
    }

    public function edit($id){
        //echo $id;
        $user=User_Table::find($id);
        return view('edit')->with('user',$user);
    }

    public function update(Request $req,$id){
        //echo $id;
        $user=User_Table::find($id);
        $user->username=$req->username;
        $user->password=$req->password;
        $user->email=$req->email;
        $user->role=$req->role;
        $user->save();

        return redirect('/user');


    }

    public function delete($id){
        echo $id;
    }

    public function destroy(Request $req,$id){
        echo $id;
    }

    public function getUserList(){
        return [
            ['id'=>1,'username'=>'shuprov','password'=>'123','email'=>'asif@gmail.com','role'=>'admin'],
            ['id'=>2,'username'=>'asif','password'=>'1234','email'=>'abc@gmail.com','role'=>'user'],
            ['id'=>3,'username'=>'paul','password'=>'12345','email'=>'xyz@gmail.com','role'=>'user']

        ];
    }

    public function submit(Request $req){
        $data= $req->all();
        User_Table::create($data);
        return redirect ('/user');
    }

    public function user_delete($id)
    {
        User_Table::find($id)->delete();
        return redirect()->back();
    }
}
