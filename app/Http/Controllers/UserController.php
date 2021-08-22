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
use DB;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserLogin;
use App\Models\room;
use Carbon\carbon;
use Validator;




class UserController extends Controller
{
    // <start login page>...
    public function log()
    {
        return view('customer.login');
    }
    public function loginVerify(UserLogin $req)
    {
        // $req->validate([
        //     'register_id'=>'required',
        //     'register_password'=>'required'
        //  ]);

        //.......sir <code class="
        // dd($req->all());
        $result = DB::table('rooms')
            ->where('name', $req->register_id)
            ->where('passwoard', $req->register_password)
            ->first();
        // dd($result);
        //(isset($result->name))
        if (isset($result)) {
            $req->session()->put('name', $result->name);
            $req->session()->put('id', $result->id);
            //set session or cookie
            
            return redirect('/dashboard');
        } else {
            $req->session()->flash('msg', 'Invalid username or password!');
            return redirect('/login');
        }
        //-----sir code end

    }
    // <end start login page>...
    //start register page work..............
    //method
    public function reg()
    {
        return view('customer.register');
    }
    //start customer register ....
    public function store(UserRequest $request)
    {
        //insert
        Room::insert([
            'name' => $request->user_name,
            'address' => $request->user_address,
            'dob' => $request->user_dob,
            'contact_number' => $request->user_mob,
            'email' => $request->user_email,
            'passwoard' => $request->user_password,
            'created_at' => Carbon::now()
        ]);
        return redirect('/login');
    }
    //end customer register...

    //validation
    public function verify(UserRequest $req)
    {


        //working validation....


    }

    //end register page work...........
}
