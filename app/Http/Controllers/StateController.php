<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Http\Requests\states\StoreStateRequest;
use App\Http\Requests\states\UpdateStateRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $states = State::paginate($request->get('per_page', 10));
        return $states;
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
    public function store(StoreStateRequest $request)
    {
        //
        $state = State::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $state);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $state);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(State $state)
    {
        //
        $state = State::find($state);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $state);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(State $state)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStateRequest $request, State $state)
    {
        //
        $state->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $state);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(State $state)
    {
        //
        $state->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
