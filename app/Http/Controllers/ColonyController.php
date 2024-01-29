<?php

namespace App\Http\Controllers;

use App\Models\Colony;
use App\Http\Requests\colonies\StoreColonyRequest;
use App\Http\Requests\colonies\UpdateColonyRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class ColonyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $colonies = Colony::paginate($request->get('per_page', 10));
        return $colonies;
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
    public function store(StoreColonyRequest $request)
    {
        //
        $colony = Colony::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $colony);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $colony);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(colony $colony)
    {
        //
        $colony = Colony::find($colony);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $colony);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(colony $colony)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateColonyRequest $request, colony $colony)
    {
        //
        $colony->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $colony);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(colony $colony)
    {
        //
        $colony->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
