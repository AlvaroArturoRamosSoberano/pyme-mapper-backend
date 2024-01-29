<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Http\Requests\industries\StoreIndustryRequest;
use App\Http\Requests\industries\UpdateIndustryRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $industries = Industry::paginate($request->get('per_page', 10));
        return $industries;
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
    public function store(StoreIndustryRequest $request)
    {
        //
        $industry = Industry::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $industry);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $industry);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Industry $industry)
    {
        //
        $industry = Industry::find($industry);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $industry);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Industry $industry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIndustryRequest $request, Industry $industry)
    {
        //
        $industry->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $industry);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Industry $industry)
    {
        //
        $industry->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
