<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manage_user;

class ManagementController extends Controller
{
    public function Managementaccounting(Request $req){
        return view('Managementaccounting');
     }


     
    
     public function submituser(Request $req){
        $data= $req->all();
        Manage_user::create($data);
        return redirect ('/logout');
      }
    

}
