<?php

namespace App\Http\Controllers;

use App\Models\Colony;
use App\Http\Requests\colonies\StoreColonyRequest;
use App\Http\Requests\colonies\UpdateColonyRequest;

class ColonyController extends Controller
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
    public function store(StoreColonyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(colony $colony)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(colony $colony)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateColonyRequest $request, colony $colony)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(colony $colony)
    {
        //
    }
}
