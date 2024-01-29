<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use App\Http\Requests\municipalities\StoreMunicipalityRequest;
use App\Http\Requests\municipalities\UpdateMunicipalityRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class MunicipalityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $municipalities = Municipality::paginate($request->get('per_page', 10));
        return $municipalities;
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
    public function store(StoreMunicipalityRequest $request)
    {
        //
        $municipality = Municipality::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $municipality);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $municipality);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Municipality $municipality)
    {
        //
        $municipality = Municipality::find($municipality);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $municipality);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Municipality $municipality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMunicipalityRequest $request, Municipality $municipality)
    {
        //
        $municipality->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $municipality);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Municipality $municipality)
    {
        //
        $municipality->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
