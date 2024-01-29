<?php

namespace App\Http\Controllers;

use App\Models\FireExtinguisherType;
use App\Http\Requests\fireExtinguisherTypes\StoreFireExtinguisherTypeRequest;
use App\Http\Requests\fireExtinguisherTypes\UpdateFireExtinguisherTypeRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class FireExtinguisherTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $fireExtinfuisherTypes = FireExtinguisherType::paginate($request->get('per_page', 10));
        return $fireExtinfuisherTypes;
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
    public function store(StoreFireExtinguisherTypeRequest $request)
    {
        //
        $fireExtinsuiherType = FireExtinguisherType::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $fireExtinsuiherType);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salio mal', 422, $fireExtinsuiherType);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(FireExtinguisherType $fireExtinguisherType)
    {
        //
        $fireExtinguisherType = FireExtinguisherType::find($fireExtinguisherType);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $fireExtinguisherType);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FireExtinguisherType $fireExtinguisherType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFireExtinguisherTypeRequest $request, FireExtinguisherType $fireExtinguisherType)
    {
        //
        $fireExtinguisherType->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $fireExtinguisherType);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FireExtinguisherType $fireExtinguisherType)
    {
        //
        $fireExtinguisherType->delete();
        return ApiResponse::success('Recurso eliminado exitosamente', 200);
    }
}
