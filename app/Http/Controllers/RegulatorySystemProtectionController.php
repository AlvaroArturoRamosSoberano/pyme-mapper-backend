<?php

namespace App\Http\Controllers;

use App\Models\RegulatorySystemProtection;
use App\Http\Requests\regulatorySystemProtections\StoreRegulatorySystemProtectionRequest;
use App\Http\Requests\regulatorySystemProtections\UpdateRegulatorySystemProtectionRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class RegulatorySystemProtectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $regulatorySystemProtections = RegulatorySystemProtection::paginate($request->get('per_page', 10));
        return $regulatorySystemProtections;
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
    public function store(StoreRegulatorySystemProtectionRequest $request)
    {
        //
        $regulatorySystemProtection = RegulatorySystemProtection::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $regulatorySystemProtection);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $regulatorySystemProtection);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(RegulatorySystemProtection $regulatorySystemProtection)
    {
        //
        $regulatorySystemProtection = RegulatorySystemProtection::find($regulatorySystemProtection);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $regulatorySystemProtection);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegulatorySystemProtection $regulatorySystemProtection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegulatorySystemProtectionRequest $request, RegulatorySystemProtection $regulatorySystemProtection)
    {
        //
        $regulatorySystemProtection->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $regulatorySystemProtection);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegulatorySystemProtection $regulatorySystemProtection)
    {
        //
        $regulatorySystemProtection->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
