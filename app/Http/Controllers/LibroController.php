<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', compact('libros'));   
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:45',
            'editorial' => 'required',
            'paginas' => 'required|integer',
        ]);

        Libro::create($request->all());

        return redirect()->route('libros.index')->with('success', 'Libro created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(libro $libro)
    {
        $libro = Libro::findOrFail('id');
        return view('libros.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(libro $libro)
    {
        $libro = Libro::findOrFail('id');
        return view('libros.edit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, libro $libro)
    {
        $request->validate([
            'title' => 'required|max:45',
            'editorial' => 'required',
            'paginas' => 'required|integer',
        ]);

        $libro = Libro::findOrFail('id');
        $libro->update($request->all());

        return redirect()->route('libros.index')->with('success', 'Libro updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(libro $libro)
    {
        $libro = Libro::findOrFail('id');
        $libro->delete();

        return redirect()->route('libros.index')->with('success', 'Libro deleted successfully.');
    }
}
