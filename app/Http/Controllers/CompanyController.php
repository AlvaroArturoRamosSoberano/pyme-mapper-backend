<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\companies\StoreCompanyRequest;
use App\Http\Requests\companies\UpdateCompanyRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $companies = Company::paginate($request->get('per_page', 10));
        return $companies;
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
    public function store(StoreCompanyRequest $request)
    {
        //
        $company = Company::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $company);
        } catch (Exception $e) {
            return ApiResponse::success('Algo salió mal', 422, $company);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
        $company = Company::find($company);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $company);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //
        $company->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $company);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
        $company->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
