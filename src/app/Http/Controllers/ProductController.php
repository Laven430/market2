<?php

namespace App\Http\Controllers;

use App\Models\Product; // Productモデルをインポート
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // 全ての商品を取得
        return view('products.index', compact('products')); // products.indexビューにデータを渡す
    }
}