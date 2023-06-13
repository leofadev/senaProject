<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Llave;
class LlaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $llaves = Llave::all();
        return view('dash.llaves', compact('llaves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $llaves = Llave::all();
        return view('crudLlaves.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $llaves = new Llave();
        $llaves->descripcion = $request->get('descripcion');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
