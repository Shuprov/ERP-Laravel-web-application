<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Category_Table;

class CategoryController extends Controller
{
    
    public function index(Request $req){
   
        if($req->session()->has('email')){
            $users= Category_Table::all();
            return view('categories.categorylist')->with('categorylist',$users);
        }
        else{
            $req->session()->flash('msg','Invalid request');
            return redirect('/login');
        }
    }
    
    public function verify(Request $req){
    
    $validation= Validator::make($req->all(),[
        'category_name'=>'required|max:10',
        'description'=>'required|max:10'
        // 'email'=>'required|min:5',
        // 'role'=>'required|max:5'
    ]);
    
    if($validation->fails())
    {
        return back()
        ->with('errors',$validation->errors())
        ->withInput()
        ;
    }
    
    }
    
    public function create(){
        return view('categories.create');
    }
    
    public function edit($id){
        //echo $id;
        $user=Category_Table::find($id);
        return view('categories.edit')->with('user',$user);
    }
    
    public function update(Request $req,$id){
        //echo $id;
        $user=Category_Table::find($id);
        $user->category_name=$req->category_name;
        $user->description=$req->description;
        // $user->email=$req->email;
        // $user->role=$req->role;
        $user->save();
    
        return redirect('/categorylist');
    
    }
    
    // public function delete($id){
    //     echo $id;
    // }
    
    // public function destroy(Request $req,$id){
    //     echo $id;
    // }
    
    public function getUserList(){
        return [
            ['id'=>1,'username'=>'shuprov','password'=>'123','email'=>'asif@gmail.com','role'=>'admin'],
            ['id'=>2,'username'=>'asif','password'=>'1234','email'=>'abc@gmail.com','role'=>'user'],
            ['id'=>3,'username'=>'paul','password'=>'12345','email'=>'xyz@gmail.com','role'=>'user']
    
        ];
    }
    
    public function submit(Request $req){
        $data= $req->all();
        Category_Table::create($data);
        return redirect ('/categorylist');
    }
    
    public function delete($id)
    {
        Category_Table::find($id)->delete();
        return redirect()->back();
    }



}
