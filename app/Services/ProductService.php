<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function listProduct()
    {
        $listProduct = Product::all();
        return $listProduct;
    }

    public function storeProduct($request)
    {
        // Vadidate data
        $this->validate($request);

        return Product::create([
            'productName' => $request->productName,
            'productNumber' => $request->productNumber,
            'image' => $request->image,
            'productPrice' => $request->productPrice,
            'productIntroduce' => $request->productIntroduce,
            'productContent' => $request->productContent
        ]);
    }

    public function validate($request)
    {
        // Product Data Input rules
        return $request->validate([
            'productName' => '',
            'productNumber' => '',
            'image' => '',
            'productPrice' => '',
            'productIntroduce' => '',
            'productContent' => ''
        ]);
    }
    public function findById($id)
    {
        $product = Product::find($id);
        return $product;
    }
}
