<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Llave;
use App\Models\Ambiente;
class LlaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $llaves = Llave::all();
        $ambientes = Ambiente::pluck('descripcion');
        return view('dash.llaves', compact('llaves'), compact('ambientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $llaves = Llave::all();
        $ambientes = Ambiente::pluck('id','descripcion');
        return view('crudLlaves.create', compact('llaves','ambientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $llaves = new Llave();
        $llaves->id_ambiente = $request->get('id_ambiente');
        $llaves->descripcion = $request->get('descripcion_llave');
        $llaves->save();

        return redirect('/llaves');
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
        $llave = Llave::find($id);
        return view('crudLlaves.edit')-> with('llave', $llave);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $llave = Llave::find($id);

        $llave->descripcion = $request->get('descripcion_llave');
        $llave->save();
        return redirect('/llaves');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $llave = Llave::find($id);
        $llave->delete();

        return redirect('/llaves');
    }
}
