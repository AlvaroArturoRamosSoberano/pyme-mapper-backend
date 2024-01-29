<?php

namespace App\Http\Controllers;

use App\Models\RegulatoryAspect;
use App\Http\Requests\regulatoryAspects\StoreRegulatoryAspectRequest;
use App\Http\Requests\regulatoryAspects\UpdateRegulatoryAspectRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class RegulatoryAspectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $regulatoryAspects = RegulatoryAspect::paginate($request->get('per_page', 10));
        return $regulatoryAspects;
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
    public function store(StoreRegulatoryAspectRequest $request)
    {
        //
        $regulatoryAspect = RegulatoryAspect::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $regulatoryAspect);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $regulatoryAspect);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(RegulatoryAspect $regulatoryAspect)
    {
        //
        $regulatoryAspect = RegulatoryAspect::find($regulatoryAspect);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $regulatoryAspect);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegulatoryAspect $regulatoryAspect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegulatoryAspectRequest $request, RegulatoryAspect $regulatoryAspect)
    {
        //
        $regulatoryAspect->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $regulatoryAspect);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegulatoryAspect $regulatoryAspect)
    {
        //
        $regulatoryAspect->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
