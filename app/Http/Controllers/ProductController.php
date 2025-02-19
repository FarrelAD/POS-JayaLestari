<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function showFoodBeverage()
    {
        try {
            $response = Http::get('https://fakestoreapi.com/products');

            $data = $response->successful() ? $response->json() : [];
        } catch (RequestException $e) {
            \Log::error("HTTP request failed: " . $e->getMessage());
            $data = [];
        }

        return view('products.food-beverage', ['products' => $data]);
    }

    public function showBeautyHealth()
    {
        try {
            $response = Http::get('https://fakestoreapi.com/products');

            $data = $response->successful() ? $response->json() : [];
        } catch (RequestException $e) {
            \Log::error("HTTP request failed: " . $e->getMessage());
            $data = [];
        }

        return view('products.beauty-health', ['products' => $data]);
    }

    public function showHomeCare()
    {
        try {
            $response = Http::get('https://fakestoreapi.com/products');

            $data = $response->successful() ? $response->json() : [];
        } catch (RequestException $e) {
            \Log::error("HTTP request failed: " . $e->getMessage());
            $data = [];
        }

        return view('products.home-care', ['products' => $data]);
    }

    public function showBabyKid()
    {
        try {
            $response = Http::get('https://fakestoreapi.com/products');

            $data = $response->successful() ? $response->json() : [];
        } catch (RequestException $e) {
            \Log::error("HTTP request failed: " . $e->getMessage());
            $data = [];
        }

        return view('products.baby-kid', ['products' => $data]);
    }
}
