<?php

namespace App\Services;

use App\Models\PriceQuote;

class PriceQuoteService
{
    public $productService;
    public $customerService;
    public function __construct(ProductService $productService, CustomerService $customerService)
    {
        $this->productService = $productService;
        $this->customerService = $customerService;
    }
    public function listQuote()
    {
        $listQuote = PriceQuote::all();
        return $listQuote;
    }

    public function storeQuote($request)
    {
        $quote = PriceQuote::create([
            'nameQuote' => $request->nameQuote
        ]);

        // Generate Product and Quote relationship
        $productsId = $this->convertStringToArray($request->productsId);
        foreach ($productsId as $productId) {
            $product = $this->productService->findById($productId);
            if (!$product) {
                return 'no product';
            };

            $product->priceQuote_id = $quote->id;
            $product->save();
        }


        // Generate Customer and Quote relationship
        $customersId = $this->convertStringToArray($request->customersId);
        foreach ($customersId as $customerId) {
            $customer = $this->customerService->findById($customerId);
            if (!$customer) {
                return 'no customer';
            };

            $customer->priceQuote_id = $quote->id;
            $customer->save();
        }

        return $quote;
    }

    public function findById($id)
    {
        $quote = PriceQuote::find($id);

        if(!$quote) return 'no quote with id supplied in database';
        return [
            'quote' => $quote->nameQuote,
            'products' => $quote->products,
            'customers' => $quote->customers
        ];
    }
    public function convertStringToArray($string)
    {
        $array = json_decode($string);

        return $array;
    }
}
