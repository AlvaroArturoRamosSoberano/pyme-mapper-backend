<?php

namespace App\Http\Controllers;

use App\Models\FuelType;
use App\Http\Requests\fuelTypes\StoreFuelTypeRequest;
use App\Http\Requests\fuelTypes\UpdateFuelTypeRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class FuelTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $fuelTypes = FuelType::paginate($request->get('per_page', 10));
        return $fuelTypes;
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
    public function store(StoreFuelTypeRequest $request)
    {
        //
        $fuelType = FuelType::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $fuelType);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $fuelType);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(FuelType $fuelType)
    {
        //
        $fuelType = FuelType::find($fuelType);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $fuelType);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FuelType $fuelType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFuelTypeRequest $request, FuelType $fuelType)
    {
        //
        $fuelType->update($request->validated());
        return ApiResponse::success('Recurso actualiado exitosamente', 200, $fuelType);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FuelType $fuelType)
    {
        //
        $fuelType->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
