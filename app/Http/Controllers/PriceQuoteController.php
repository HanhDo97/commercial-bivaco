<?php

namespace App\Http\Controllers;

use App\Services\CustomerService;
use Illuminate\Http\Request;
use App\Services\PriceQuoteService;
use App\Services\ProductService;

class PriceQuoteController extends Controller
{
    public $quoteService;
    public $productService;
    public $customerService;
    public function __construct(
        PriceQuoteService $quoteService,
        ProductService $productService,
        CustomerService $customerService
    ) {
        $this->quoteService = $quoteService;
    }
    public function listQuote()
    {
        $listQuote = $this->quoteService->listQuote();
        return $listQuote;
    }

    public function showForm()
    {
        // Get products and customers so Price quote can choose 1 or many either customers and products
        $customers = $this->customerService->listCustomer();
        $products = $this->productService->listProduct();

        return [
            'view form create',
            'customers' => $customers,
            'products' => $products
        ];
    }

    public function storeQuote(Request $request)
    {
        $quote = $this->quoteService->storeQuote($request);

        return $quote;
    }
    public function showQuote($id)
    {
        $quote = $this->quoteService->findById($id);

        return $quote;
    }
}
