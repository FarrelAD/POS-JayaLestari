<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function showFoodBeverage()
    {
        $response = Http::get('https://fakestoreapi.com/products');
        return view('products.food-beverage', ['products' => $response]);
    }

    public function showBeautyHealth()
    {
        return view('products.beauty-health');
    }

    public function showHomeCare()
    {
        return view('products.home-care');
    }

    public function showBabyKid()
    {
        return view('products.baby-kid');
    }
}
