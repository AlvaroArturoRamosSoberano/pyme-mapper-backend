<?php

namespace App\Http\Controllers;

use App\Models\License;
use App\Http\Requests\licenses\StoreLicenseRequest;
use App\Http\Requests\licenses\UpdateLicenseRequest;

class LicenseController extends Controller
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
    public function store(StoreLicenseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(License $licence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(License $licence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLicenseRequest $request, License $licence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(License $licence)
    {
        //
    }
}
