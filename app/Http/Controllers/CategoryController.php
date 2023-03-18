<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryView(){
        return view('add-category');
    }
    public function categoryAdd(Request $data){
        Category::categoryAdd($data);
        return back()->with('message', 'info saved');
    }
}
