<?php

namespace App\Http\Controllers;

use App\Models\ejemplar;
use App\Models\ejemplar_usuario;
use App\Models\usuario;
use Illuminate\Http\Request;

class EjemplarUsuarioController extends Controller
{
   
    public function index()
    {
        $ejemplars= ejemplar::all();
        $usuarios= usuario::all();

        return view('libros.asociar',compact('ejemplars','usuarios'));

        
    }

    public function store(Request $request)
    {

        $request->validate([
            'ejemplar_id' => 'required',
            'usuario_id' => 'required',
        ]);

        ejemplar_usuario::create($request->all());

        $ejemplar=ejemplar::find($request->ejemplar_id);
        $ejemplar->usuarios()->attach($request->ejemplar_id);

        $usuario=usuario::find($request->usuario_id);
        
        $usuario->ejemplars()->attach($request->ejemplar_id);

        $usuario->ejemplars()->detach($request->ejemplar_id);

        return redirect()->route('libros.index');

    }  
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(ejemplar_usuario $ejemplar_usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ejemplar_usuario $ejemplar_usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ejemplar_usuario $ejemplar_usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ejemplar_usuario $ejemplar_usuario)
    {
        //
    }
}
