<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showFoodBeverage()
    {
        return "Food beverage";
    }

    public function showBeautyHealth()
    {
        return "Beauty health";
    }

    public function showHomeCare()
    {
        return "Home care";
    }

    public function showBabyKid()
    {
        return "Baby kid";
    }
}
