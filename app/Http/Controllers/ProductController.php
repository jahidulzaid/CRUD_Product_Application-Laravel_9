<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private static $products, $product,$categories;

    public function productView(){
        return view('add-product',[
            'categories'=>Category::all()
        ]);

    }
    public function productAdd(Request $RequestedData){
        Product::saveProduct($RequestedData);
        return back()->with('message', 'info saved!!');
    }

    public function productdelete(Request $requestedDataToDelete){
        Product::deleteProduct($requestedDataToDelete->id);
        return back()->with('message', 'item deleted');
    }

    public function productEdit($id){
        self::$categories=Category::all();

        self::$product=Product::find($id);
        return view('edit-product',
            [
                'productToEdit'=>self::$product
            ],
            [
                'categories'=>self::$categories
            ]
        );
    }
    public function productUpdate(Request $requestedInfo){
        Product::productUpdate($requestedInfo);
        return back()->with('message','Info Updated');
    }
}
