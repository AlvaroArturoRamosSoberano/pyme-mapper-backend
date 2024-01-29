<?php

namespace App\Http\Controllers;

use App\Models\RegulatoryLicense;
use App\Http\Requests\regulatoryLicenses\StoreRegulatoryLicenseRequest;
use App\Http\Requests\regulatoryLicenses\UpdateRegulatoryLicenseRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class RegulatoryLicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $regulatoryLicenses = RegulatoryLicense::paginate($request->get('per_page', 10));
        return $regulatoryLicenses;
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
    public function store(StoreRegulatoryLicenseRequest $request)
    {
        //
        $regulatoryLicense = RegulatoryLicense::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $regulatoryLicense);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $regulatoryLicense);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(RegulatoryLicense $regulatoryLicense)
    {
        //
        $city = RegulatoryLicense::find($regulatoryLicense);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $regulatoryLicense);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegulatoryLicense $regulatoryLicense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegulatoryLicenseRequest $request, RegulatoryLicense $regulatoryLicense)
    {
        //
        $regulatoryLicense->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $regulatoryLicense);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegulatoryLicense $regulatoryLicense)
    {
        //
        $regulatoryLicense->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
