<?php

namespace App\Http\Controllers;

use App\Models\InspectionRiskAspect;
use App\Http\Requests\inspectionRiskAspects\StoreInspectionRiskAspectRequest;
use App\Http\Requests\inspectionRiskAspects\UpdateInspectionRiskAspectRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class InspectionRiskAspectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $inspectionRiskAspects = InspectionRiskAspect::paginate($request->get('per_page', 10));
        return $inspectionRiskAspects;
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
    public function store(StoreInspectionRiskAspectRequest $request)
    {
        //
        $city = InspectionRiskAspect::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $city);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $city);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(InspectionRiskAspect $inspectionRiskAspects)
    {
        //
        $inspectionRiskAspects = InspectionRiskAspect::find($inspectionRiskAspects);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $inspectionRiskAspects);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InspectionRiskAspect $inspectionRiskAspects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInspectionRiskAspectRequest $request, InspectionRiskAspect $inspectionRiskAspects)
    {
        //
        $inspectionRiskAspects->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $inspectionRiskAspects);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InspectionRiskAspect $inspectionRiskAspects)
    {
        //
        $inspectionRiskAspects->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
