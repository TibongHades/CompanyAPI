<?php

namespace App\Http\Controllers;

use App\Models\SoldItems;
use App\Http\Requests\StoreSoldItemsRequest;
use App\Http\Requests\UpdateSoldItemsRequest;

class SoldItemsController extends Controller
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
    public function store(StoreSoldItemsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SoldItems $soldItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SoldItems $soldItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSoldItemsRequest $request, SoldItems $soldItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SoldItems $soldItems)
    {
        //
    }
}
