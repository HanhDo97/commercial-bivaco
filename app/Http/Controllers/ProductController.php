<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function listProduct()
    {
        $listProduct = $this->productService->listProduct();
        return $listProduct;
    }

    public function showForm()
    {
        return 'view form create';
    }

    public function storeProduct(Request $request)
    {
        $product = $this->productService->storeProduct($request);

        return $product;
    }
}
