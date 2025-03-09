<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //CRUD
    public function create()
    {
        return Product::create([
            'name'        => 'tv 50 LG',
            'description' => Str::random(50),
        ]);
    }

    public function index()
    {
        // $product = Product::findOrFail(2);
        // $product->name        = "TV 65 SAMSUNG";
        // $product->description = "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله";
        // $product->save();
        // return $product;
        // $product->delete();
        return Product::whereIn('id',[3,5,6,9,10])->get();
    }

}
