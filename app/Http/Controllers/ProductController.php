<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'productName' => 'Manteiga', 'productPrice' => 29.99],
            ['id' => 2, 'productName' => 'Sorvete', 'productPrice' => 49.99],
            ['id' => 3, 'productName' => 'Sucrilhos', 'productPrice' => 19.99],
            ['id' => 4, 'productName' => 'Picanha', 'productPrice' => 99.99],
        ];

        return view('products.index', ['products' => $products]);
    }

    public function show($id)
    {
        $products = [
            1 => ['productName' => 'Manteiga', 'productDescription' => 'Manteiga gostosa', 'productPrice' => 29.99],
            2 => ['productName' => 'Sorvete', 'productDescription' => 'Sorvete de flocos', 'productPrice' => 49.99],
            3 => ['productName' => 'Sucrilhos', 'productDescription' => 'Sucrilhos docinho', 'productPrice' => 19.99],
            4 => ['productName' => 'Picanha', 'productDescription' => 'Picanha VIP', 'productPrice' => 99.99],
        ];
       ;

        if (isset($products[$id])) {
            return view('products.show', ['product' => $products[$id]]);
        }

        abort(404);
    }
}
