<?php

namespace App\Http\Controllers;

use App\Models\IncidentRecord;
use App\Http\Requests\incidentRecords\StoreIncidentRecordRequest;
use App\Http\Requests\incidentRecords\UpdateIncidentRecordRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class IncidentRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $incidentRecords = IncidentRecord::paginate($request->get('per_page', 10));
        return $incidentRecords;
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
    public function store(StoreIncidentRecordRequest $request)
    {
        //
        $incidentRecord = IncidentRecord::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $incidentRecord);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $incidentRecord);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(IncidentRecord $incidentRecord)
    {
        //
        $incidentRecord = IncidentRecord::find($incidentRecord);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $incidentRecord);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IncidentRecord $incidentRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIncidentRecordRequest $request, IncidentRecord $incidentRecord)
    {
        //
        $incidentRecord->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $incidentRecord);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IncidentRecord $incidentRecord)
    {
         //
         $incidentRecord->delete();
         return ApiResponse::success('Eliminado exitosamente', 200);
     }
}
