<?php

namespace App\Http\Controllers;

use App\Models\Superheroe;

use Illuminate\Http\Request;

class SuperheroeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheroes = Superheroe::all();
        return view('superheroes.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superheroes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_real' => 'required',
            'nombre_heroe' => 'required'
        ]);

        Superheroe::create($request->all());

        return redirect()->route('superheroes.index')
                         ->with('success', 'Superhéroe creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        return view('superheroes.show', compact('superheroe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        return view('superheroes.edit', compact('superheroe'));
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Buscar el superhéroe por ID
        $superheroe = Superheroe::findOrFail($id);

        // Validación de los datos
        $request->validate([
            'nombre_real' => 'required|string|max:255',
            'nombre_heroe' => 'required|string|max:255',
            'foto' => 'nullable|url',
            'informacion' => 'nullable|string',
        ]);

        // Actualizar los datos
        $superheroe->update($request->all());

        // Redirigir después de la actualización
        return redirect()->route('superheroes.index')
                     ->with('success', 'Superhéroe actualizado correctamente');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Superheroe::destroy($id);
        return redirect()->route('superheroes.index')
            ->with('success', 'Superhéroe eliminado correctamente');
    }
}
