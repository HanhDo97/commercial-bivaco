<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CustomerService;

class CustomerController extends Controller
{
    public $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function listCustomer()
    {
        $listCustomer = $this->customerService->listCustomer();

        return $listCustomer;
    }

    public function showForm()
    {
        return 'create Customer form';
    }

    public function storeCustomer(Request $request)
    {
        $customer = $this->customerService->storeCustomer($request);

        return $customer;
    }
}
