<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{

    public function index() {
        $customers = Customer::orderBy('name')->get();
        return response()->json($customers);
    }


    public function show(Customer $customer) {
        return response()->json([
            'status' => 'OK',
            'data' => $customer->load('sales'),
        ]);
    }
}
