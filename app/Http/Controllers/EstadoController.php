<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Ambiente;
use App\Models\Llave;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estados = Estado::all();
        $llaves = Llave::pluck('descripcion');
        $ambientes = Ambiente::pluck('descripcion');
        return view('dash.estado', compact('estados','llaves','ambientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $llaves = Llave::pluck('id');
        $llave_descripcion = Llave::pluck('descripcion');
        $ambientes = Ambiente::pluck('id');
        return view('crudEstado.create', compact('llaves','llave_descripcion','ambientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estados = new Estado();
        $estados->id_llave = $request->get('id_llave');
        $estados->id_ambiente = $request->get('id_ambiente');
        $estados->prestatario = $request->get('prestatario');
        $estados->encargado = $request->get('encargado');
        $estados->estado = $request->get('estado');
        $estados->save();

        return redirect('/estados');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStatusKey(Request $request)
    {
        $KeyUpdate = Estado::findOrFail($request->id)->update(['estado' => $request->estado]);

        if ($request->estado == 0) {
            $newStatus = '<button type="button" class="btn btn-sm btn-success">Habilitado</button>';
        }else{
            $newStatus = '<button type="button" class="btn btn-sm btn-danger">Inhabilitado</button>';
        }
        return response()->json(['var'=>''.$newStatus.'']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estado = Estado::find($id);
        $estado->delete();

        return redirect('/estados');
    }
}
