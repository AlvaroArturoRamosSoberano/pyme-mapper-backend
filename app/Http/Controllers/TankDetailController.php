<?php

namespace App\Http\Controllers;

use App\Models\TankDetail;
use App\Http\Requests\tankDetails\StoreTankDetailRequest;
use App\Http\Requests\tankDetails\UpdateTankDetailRequest;

class TankDetailController extends Controller
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
    public function store(StoreTankDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TankDetail $tankDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TankDetail $tankDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTankDetailRequest $request, TankDetail $tankDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TankDetail $tankDetail)
    {
        //
    }
}
