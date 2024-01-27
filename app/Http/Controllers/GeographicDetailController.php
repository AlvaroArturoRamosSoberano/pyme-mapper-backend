<?php

namespace App\Http\Controllers;

use App\Models\GeographicDetail;
use App\Http\Requests\geographicDetails\StoreGeographicDetailRequest;
use App\Http\Requests\geographicDetails\UpdateGeographicDetailRequest;

class GeographicDetailController extends Controller
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
    public function store(StoreGeographicDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GeographicDetail $geographicDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GeographicDetail $geographicDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGeographicDetailRequest $request, GeographicDetail $geographicDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GeographicDetail $geographicDetail)
    {
        //
    }
}
