<?php

namespace App\Http\Controllers;

use App\Models\FireExtinguisherDetail;
use App\Http\Requests\fireExtinguisherDetails\StoreFireExtinguisherDetailRequest;
use App\Http\Requests\fireExtinguisherDetails\UpdateFireExtinguisherDetailRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class FireExtinguisherDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $fireExtinguisherDetails = FireExtinguisherDetail::paginate($request->get('per_page', 10));
        return $fireExtinguisherDetails;
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
    public function store(StoreFireExtinguisherDetailRequest $request)
    {
        //
        $fireExtinguisherDetail = FireExtinguisherDetail::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $fireExtinguisherDetail);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $fireExtinguisherDetail);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(FireExtinguisherDetail $fireExtinguisherDetail)
    {
        //
        $fireExtinguisherDetail = FireExtinguisherDetail::find($fireExtinguisherDetail);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $fireExtinguisherDetail);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FireExtinguisherDetail $fireExtinguisherDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFireExtinguisherDetailRequest $request, FireExtinguisherDetail $fireExtinguisherDetail)
    {
        //
        $fireExtinguisherDetail->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $fireExtinguisherDetail);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FireExtinguisherDetail $fireExtinguisherDetail)
    {
        //
        $fireExtinguisherDetail->delete();
        return ApiResponse::success('Eliminado exitosamente', 202);
    }
}
