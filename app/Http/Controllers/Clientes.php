<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Clientes extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titulo='Clientes';
        $items = Cliente::all();
        return view('modules.clientes.index',compact('items','titulo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $titulo='Crear clientes';
        return view('modules.clientes.create',compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $item = new Cliente();
        $item->id_usuario  = Auth::user()->id;
        $item->apellido = $request->apellido;
        $item->nombre = $request->nombre; 
        $item->email = $request->email; 


        $item->save();
        return to_route('ventas-clientes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $titulo='eliminar Categoria';
        $item = Cliente::find($id);
        return view('modules.clientes.show', compact('item','titulo'));//a donde se envia

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $titulo='editar Categoria';
        $item = Cliente::find($id);
        return view('modules.clientes.edit', compact('item','titulo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $item= Cliente::Find($id);//buscando 
        $item->apellido = $request->apellido;
        $item->nombre = $request->nombre; 
        $item->email = $request->email; 
        $item->save();
        return to_route('ventas-clientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $item= Cliente::Find($id);//buscando 
        $item->delete();
        return to_route('ventas-clientes');
    }
}
