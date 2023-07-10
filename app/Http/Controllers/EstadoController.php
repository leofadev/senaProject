<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Ambiente;
use App\Models\Llave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estados = Estado::all();
        $llaves = Llave::all('id','descripcion_llave');
        $ambientes = Ambiente::all('id','descripcion');
        return view('dash.estado', compact('estados', 'llaves', 'ambientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $llaves = Llave::all('id','descripcion_llave');
        $llave_descripcion = Llave::pluck('descripcion_llave');
        $ambientes = Ambiente::all('id','descripcion');
        return view('crudEstado.create', compact('llaves', 'llave_descripcion', 'ambientes'));
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
    public function updateStatusKey($id, $estado)
    {
        // $KeyUpdate = Estado::findOrFail($id)->update(['estado' => $estado]);
        $KeyUpdate = DB::table('estados')->where('id', $id)
        ->update(['estado' => $estado]);

        if ($estado == 'habilitado') {
            $newStatus = '<p class="btn btn-success">Habilitado</p>';
        } else {
            $newStatus = '<p class="btn btn-danger">Inhabilitado</p>';
        }

        return response(json_encode($newStatus), 200)->header('Content-type', 'text/plain');
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
