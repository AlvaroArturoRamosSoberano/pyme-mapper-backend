<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\brands\StoreBrandRequest;
use App\Http\Requests\brands\UpdateBrandRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $brands = Brand::paginate($request->get('per_page', 10));
        return $brands;
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
    public function store(StoreBrandRequest $request)
    {
        //
        $brand = Brand::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $brand);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $brand);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
        $brand = Brand::find($brand);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $brand);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        //
        $brand->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $brand);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
        $brand->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
