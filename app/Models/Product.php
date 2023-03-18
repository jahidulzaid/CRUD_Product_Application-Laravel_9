<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product;
    public static function saveProduct($RequestedData){
        self::$product = new Product();
        self::$product->name = $RequestedData->name;
        self::$product->cat_id = $RequestedData->cat_id;
        self::$product->price = $RequestedData->price;
        self::$product->image = self::saveProductImage($RequestedData);
        self::$product->description = $RequestedData->description;
        self::$product->save();
    }
    //property for updating image
    private static $image,$imageNewName, $directoryOfImage, $imageUrl;
    public static function saveProductImage($RequestedData){
        self::$image = $RequestedData->file('image');
        self::$imageNewName='Stu-'.rand().'.'.self::$image->getClientOriginalExtension();
        self::$directoryOfImage='assets/images/product-image/';
        self::$imageUrl = self::$directoryOfImage.self::$imageNewName;
        self::$image->move(self::$directoryOfImage, self::$imageNewName);
        return self::$imageUrl;
    }

    public static function deleteProduct($id){
        self::$product = Product::find($id);
        self::$product->delete();
    }

    public static function productUpdate($RequestedData){
        self::$product = Product::find($RequestedData->id);
        self::$product->name = $RequestedData->name;
        self::$product->cat_id = $RequestedData->cat_id;
        self::$product->price = $RequestedData->price;
        self::$product->image =  self::saveProductImage($RequestedData);
        self::$product->description = $RequestedData->description;
        self::$product->save();
    }


}
