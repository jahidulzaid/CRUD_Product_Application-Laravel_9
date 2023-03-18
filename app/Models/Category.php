<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category;
    public static function categoryAdd($data){
        self::$category = new Category();
        self::$category->cat_name = $data->cat_name;
        self::$category->cat_id = $data->cat_id;
        self::$category->save();

    }
}
