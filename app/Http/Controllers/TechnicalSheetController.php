<?php

namespace App\Http\Controllers;

use App\Models\TechnicalSheet;
use App\Http\Requests\technicalSheet\StoreTechnicalSheetRequest;
use App\Http\Requests\technicalSheet\UpdateTechnicalSheetRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class TechnicalSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $technicalSheets = TechnicalSheet::paginate($request->get('per_page', 10));
        return $technicalSheets;
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
        $technicalSheet = TechnicalSheet::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $technicalSheet);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $technicalSheet);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(TechnicalSheet $technicalSheet)
    {
        //
        $technicalSheet = TechnicalSheet::find($technicalSheet);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $technicalSheet);
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
        $technicalSheet->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $technicalSheet);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TechnicalSheet $technicalSheet)
    {
        //
        $technicalSheet->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
