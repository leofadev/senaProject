<?php

namespace App\Http\Controllers;

use App\Models\Ambiente;
use Illuminate\Http\Request;

class AmbienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dash.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function ambientes()
    {
        $ambientes = Ambiente::all();
        return view('dash.ambientes', compact('ambientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crudAmbientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ambientes = new Ambiente();
        $ambientes->descripcion = $request->get('descripcion');
        $ambientes->save();

        return redirect('/ambientes');
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
        $ambiente = Ambiente::find($id);
        return view('crudAmbientes.edit')-> with('ambiente', $ambiente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ambiente = Ambiente::find($id);

        $ambiente->descripcion = $request->get('descripcion');
        $ambiente->save();

        return redirect('/ambientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ambiente = Ambiente::find($id);
        $ambiente->delete();

        return redirect('/ambientes');
    }

}
