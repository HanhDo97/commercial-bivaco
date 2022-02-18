<?php

namespace App\Services;

use App\Models\Customer;

class CustomerService
{
    public function listCustomer()
    {
        $listCustomer = Customer::all();
        return $listCustomer;
    }

    public function storeCustomer($request)
    {
        // Vadidate data
        $this->validate($request);

        return Customer::create([
            'name' => $request->name,
            'address' => $request->address,
            'phoneNumber' => $request->phoneNumber,
            'taxNumber' => $request->taxNumber
        ]);
    }

    public function validate($request)
    {
        // Customer Data Input rules
        return $request->validate([
            'name' => '',
            'address' => '',
            'phoneNumber' => '',
            'taxNumber' => ''
        ]);
    }

    public function findById($id)
    {
        $customer = Customer::find($id);

        return $customer;
    }
}
