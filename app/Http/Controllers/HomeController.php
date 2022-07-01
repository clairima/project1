<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

       if(Auth()->user()->is_admin==1){

        return view('AdminPage');
       } 
        
       return view('UserPage');
    } 
}
