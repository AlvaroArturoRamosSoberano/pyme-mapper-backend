<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\users\StoreUserRequest;
use App\Http\Requests\users\UpdateUserRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $users = User::paginate($request->get('per_page', 10));
        return $users;
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
    public function store(StoreUserRequest $request)
    {
        //
        $user = User::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $user);
        } catch (Exception $e) {
            return ApiResponse::error('Algo salió mal', 422, $user);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        $user = User::find($user);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $user);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $tankDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
        $user->update($request->validated());
        return ApiResponse::success('Recurso actualizado exitosamente', 200, $user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return ApiResponse::success('Eliminado exitosamente', 200);
    }
}
