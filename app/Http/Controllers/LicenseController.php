<?php

namespace App\Http\Controllers;

use App\Models\License;
use App\Http\Requests\licenses\StoreLicenseRequest;
use App\Http\Requests\licenses\UpdateLicenseRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $licenses = License::paginate($request->get('per_page', 10));
        return $licenses;
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
    public function store(StoreLicenseRequest $request)
    {
        //
        $licence = License::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $licence);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $licence);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(License $licence)
    {
        //
        $licence = License::find($licence);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $licence);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(License $licence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLicenseRequest $request, License $licence)
    {
        //
        $licence->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $licence);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(License $licence)
    {
        //
        $licence->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
