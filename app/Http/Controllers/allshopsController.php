<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allshopsController extends Controller
{
    //
    public function shop(){
        return view('customer.allshops');
    }

}
