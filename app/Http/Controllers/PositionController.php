<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Http\Requests\positions\StorePositionRequest;
use App\Http\Requests\positions\UpdatePositionRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $positions = Position::paginate($request->get('per_page', 10));
        return $positions;
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
    public function store(StorePositionRequest $request)
    {
        //
        $position = Position::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $position);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $position);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {
        //
        $position = Position::find($position);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $position);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePositionRequest $request, Position $position)
    {
        //
        $position->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $position);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        //
        $position->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
