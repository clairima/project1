<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Models\Product\DB;

class CategoriesController extends Controller
{
    //
    public function categories(){

        return view("categories");
    }
   
    public function jackets(){
    $jackets = Product::where('status', 1)->pluck('name','category_id', 'subcategory_id');
    $selectedID = [$category_id ,$subcategory_id]=[1,1];
    return view('categories.edit', compact('id', 'products'));
    }
}

