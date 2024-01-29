<?php

namespace App\Http\Controllers;

use App\Models\Inspection;
use App\Http\Requests\inspections\StoreInspectionRequest;
use App\Http\Requests\inspections\UpdateInspectionRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class InspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $inspections = Inspection::paginate($request->get('per_page', 10));
        return $inspections;
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
    public function store(StoreInspectionRequest $request)
    {
        //
        $inspection = Inspection::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $inspection);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $inspection);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Inspection $inspection)
    {
        //
        $inspection = Inspection::find($inspection);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $inspection);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inspection $inspection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInspectionRequest $request, Inspection $inspection)
    {
        //
        $inspection->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $inspection);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inspection $inspection)
    {
        //
        $inspection->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
