<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;

class SupplierController extends Controller
{
    public function index() {
        $suppliers = Supplier::orderBy('company_name')->get();
        return response()->json($suppliers);
    }
}
