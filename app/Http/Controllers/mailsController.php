<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailsController extends Controller
{
    
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        Mail::send('mailers',['username'=>'test'], function($message){
           // var_dump($message);
            $message->to('webmaster@resinence.com')->subject('welcome');
    });

    }

}
