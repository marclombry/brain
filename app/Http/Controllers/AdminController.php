<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if(!\Auth::check())
        {
            return redirect('home');
        }
    	if (\Auth::check() and \Auth::user()->admin==2)
    	{
    		return view('pages/admin');
    	}else{
    		return redirect('home');
    	}
    }

  
}
