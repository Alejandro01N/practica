<?php

namespace App\Http\Controllers;

use App\Models\Operario;
use Illuminate\Http\Request;

class OperarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('operarios.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('operarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cedula' => 'required|unique:operarios|max:10',
            'telefono' => 'required|max:10',
            'nombre' => 'required|max:255',
            'correo' => 'nullable|email',
            'sueldo' => 'required|max:255',
            'edad' => 'required|max:10',
            'direccion' => 'required|max:255'


        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Operario $operario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Operario $operario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Operario $operario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Operario $operario)
    {
        //
    }
}
