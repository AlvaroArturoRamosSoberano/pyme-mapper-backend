<?php

namespace App\Http\Controllers;

use App\Models\TechnicalSheet;
use App\Http\Requests\technicalSheet\StoreTechnicalSheetRequest;
use App\Http\Requests\technicalSheet\UpdateTechnicalSheetRequest;

class TechnicalSheetController extends Controller
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
    public function store(StoreTechnicalSheetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TechnicalSheet $technicalSheet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TechnicalSheet $technicalSheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTechnicalSheetRequest $request, TechnicalSheet $technicalSheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TechnicalSheet $technicalSheet)
    {
        //
    }
}
