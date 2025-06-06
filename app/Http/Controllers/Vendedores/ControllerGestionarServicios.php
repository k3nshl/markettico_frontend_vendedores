<?php

namespace App\Http\Controllers\Vendedores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerGestionarServicios extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //$productos = Producto::paginate(10); (Se agrega cuando esten los modelos)

        return view('servicios.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('servicios.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "update servicios";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
