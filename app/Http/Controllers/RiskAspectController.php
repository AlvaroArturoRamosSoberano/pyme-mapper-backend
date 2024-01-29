<?php

namespace App\Http\Controllers;

use App\Models\RiskAspect;
use App\Http\Requests\riskAspects\StoreRiskAspectRequest;
use App\Http\Requests\riskAspects\UpdateRiskAspectRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class RiskAspectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $riskAspects = RiskAspect::paginate($request->get('per_page', 10));
        return $riskAspects;
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
    public function store(StoreRiskAspectRequest $request)
    {
        //
        $riskAspect = RiskAspect::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $riskAspect);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $riskAspect);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(RiskAspect $riskAspect)
    {
        //
        $riskAspect = RiskAspect::find($riskAspect);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $riskAspect);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RiskAspect $riskAspect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRiskAspectRequest $request, RiskAspect $riskAspect)
    {
        //
        $riskAspect->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $riskAspect);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RiskAspect $riskAspect)
    {
        //
        $riskAspect->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
