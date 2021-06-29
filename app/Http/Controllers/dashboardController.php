<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //method
    public function __construct()
    {
        $this->middleware("Customer");
    }
    public function dash(){
        return view('customer.profile.dashboard');
    }
}
