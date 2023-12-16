<?php

namespace App\Http\Controllers;

use App\Models\PurchasedItems;
use App\Http\Requests\StorePurchasedItemsRequest;
use App\Http\Requests\UpdatePurchasedItemsRequest;

class PurchasedItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePurchasedItemsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PurchasedItems $purchasedItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PurchasedItems $purchasedItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePurchasedItemsRequest $request, PurchasedItems $purchasedItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PurchasedItems $purchasedItems)
    {
        //
    }
}
