<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Http\Requests\cities\StoreCityRequest;
use App\Http\Requests\cities\UpdateCityRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $cities = City::paginate($request->get('per_page', 10));
        return $cities;
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
    public function store(StoreCityRequest $request)
    {
        //
        $city = City::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $city);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $city);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        //
        $city = City::find($city);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $city);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCityRequest $request, City $city)
    {
        //
        $city->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $city);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        //
        $city->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
