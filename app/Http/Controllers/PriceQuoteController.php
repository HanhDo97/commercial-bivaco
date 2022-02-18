<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PriceQuoteService;

class PriceQuoteController extends Controller
{
    public $quoteService;
    public function __construct(PriceQuoteService $quoteService)
    {
        $this->quoteService = $quoteService;
    }
    public function listQuote()
    {
        $listQuote = $this->quoteService->listQuote();
        return $listQuote;
    }

    public function showForm()
    {
        return 'view form create';
    }

    public function storeQuote(Request $request)
    {
        $quote = $this->quoteService->storeQuote($request);

        return $quote;
    }
}
