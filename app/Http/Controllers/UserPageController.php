<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserPageController extends Controller
{
    //
   // public function index()
   // {
        //$products =Product::all();
        //return view('UserPage' , compact('products'));
    //}


    public static function show(){
        $products =Product::paginate();

        return view("UserPage");

    }
}
