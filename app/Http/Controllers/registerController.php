<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    //method
    public function reg(){
        return view('customer.register');
    }
}
