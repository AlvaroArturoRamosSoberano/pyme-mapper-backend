<?php

namespace App\Http\Controllers;

use App\Models\SystemProtection;
use App\Http\Requests\systemProtections\StoreSystemProtectionRequest;
use App\Http\Requests\systemProtections\UpdateSystemProtectionRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class SystemProtectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $systemProtections = SystemProtection::paginate($request->get('per_page', 10));
        return $systemProtections;
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
    public function store(StoreSystemProtectionRequest $request)
    {
        //
        $systemProtection = SystemProtection::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $systemProtection);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $systemProtection);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SystemProtection $systemProtection)
    {
        //
        $systemProtection = SystemProtection::find($systemProtection);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $systemProtection);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SystemProtection $systemProtection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSystemProtectionRequest $request, SystemProtection $systemProtection)
    {
        //
        $systemProtection->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $systemProtection);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SystemProtection $systemProtection)
    {
        //
        $systemProtection->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
