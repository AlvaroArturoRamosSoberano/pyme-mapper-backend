<?php

namespace App\Http\Controllers;

use App\Models\GeographicDetail;
use App\Http\Requests\geographicDetails\StoreGeographicDetailRequest;
use App\Http\Requests\geographicDetails\UpdateGeographicDetailRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class GeographicDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $geographicDetails = GeographicDetail::paginate($request->get('per_page', 10));
        return $geographicDetails;
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
    public function store(StoreGeographicDetailRequest $request)
    {
        //
        $geographicDetail = GeographicDetail::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $geographicDetail);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $geographicDetail);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(GeographicDetail $geographicDetail)
    {
        //
        $geographicDetail = GeographicDetail::find($geographicDetail);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $geographicDetail);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GeographicDetail $geographicDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGeographicDetailRequest $request, GeographicDetail $geographicDetail)
    {
        //
        $geographicDetail->update($request->Validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $geographicDetail);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GeographicDetail $geographicDetail)
    {
        //
        $geographicDetail->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
