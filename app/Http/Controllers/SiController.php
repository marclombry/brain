<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiController extends Controller
{
    public function index()
    {
    	return view('pages/si');
    }
}
