<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
  
  public function index(Request $request){
  	$pays='a';
	$famille='';
	$reference='';
	$dateBegin='';
	$dateEnd='';
	return view('pages.articles',compact('pays','famille','reference','dateBegin','dateEnd'));
  }
  public function store(Request $request){
  	if($request->isMethod('post')){
  		$pays = $request->input('pays');
		$famille = $request->input('famille');
		$reference = $request->input('reference');
		$dateBegin = $request->input('dateBegin');
		$dateEnd = $request->input('dateEnd');
	    return view('pages.articles',compact('pays','famille','reference','dateBegin','dateEnd'));
  	}
  }
}
