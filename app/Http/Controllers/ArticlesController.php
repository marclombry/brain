<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilities\Grafiques;
class ArticlesController extends Controller
{
    public function index(){
    	return view('pages.articles');
    }

    public function post(Request $request){
    	// si l'utilisateur a poster alors j'appel le trait graphiques en inserant les donnée//
        $inputs = $request->all();
        Grafiques::generate($inputs);
    	return view('pages.articles');
    }

    public function show(){
    	// je returne la vue articles avec les graphiques
    	return view('pages.articles');
    }

    public function create(){

    }

    public function edit(){

    }

    public function update(){

    }
}
