<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Marca::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validación
        $request->validate([
            'nombre'=>'required',
        ]);

        $marca = Marca::create($request->all());

        return response()->json([
            'mensaje'=> 'Marca creada satisfactoriamente',
            'marca'=>$marca
        ],201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $marca = Marca::find($id);

        if(!$marca){
            return response()->json([
                'mensaje'=>'Marca no encontrada'
            ], 404);
        }

        return response()->json($marca, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nombre'=>'required',
        ]);

        $marca = Marca::find($id);

        if(!$marca){
            return response()->json([
                'mensaje'=>'Marca no encontrada'
            ], 404);
        }

        $marca->update($request->all());

        return response()->json([
            'mensaje'=> 'Marca actualizada satisfactoriamente',
            'marca'=>$marca
        ],201);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $marca = Marca::find($id);

        if(!$marca){
            return response()->json([
                'mensaje'=>'Marca no encontrada'
            ], 404);
        }

        $marca->delete();

        return response()->json([
            'mensaje'=>'Marca eliminada satisfactoriamente'
        ],200);
    }
}
