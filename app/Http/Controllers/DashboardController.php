<?php

namespace App\Http\Controllers;

use Auth,Redirect;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::check())
        {
            return view('home');
        }
        else
        {
           Redirect::back();
        }
       // return view('home');
    }

    
}
