<?php

namespace App\Http\Controllers;

use App\Models\TankDetail;
use App\Http\Requests\tankDetails\StoreTankDetailRequest;
use App\Http\Requests\tankDetails\UpdateTankDetailRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class TankDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $tankDetails = TankDetail::paginate($request->get('per_page', 10));
        return $tankDetails;
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
    public function store(StoreTankDetailRequest $request)
    {
        //
        $tankDetail = TankDetail::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $tankDetail);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $tankDetail);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(TankDetail $tankDetail)
    {
        //
        $tankDetail = TankDetail::find($tankDetail);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $tankDetail);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TankDetail $tankDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTankDetailRequest $request, TankDetail $tankDetail)
    {
        //
        $tankDetail->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $tankDetail);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TankDetail $tankDetail)
    {
        //
        $tankDetail->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
