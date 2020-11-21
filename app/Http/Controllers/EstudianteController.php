<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

use App\Http\Resources\EstudianteCollection;
use App\Http\Resources\EstudianteResource;
use App\Http\Requests\EstudianteRequest;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //GET
        return response()->json(
            new EstudianteCollection(
                Estudiante::orderBy('carnet', 'asc')->get()
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //POST
        $estudiante = Estudiante::create( $request->all() );
        return response()->json( new EstudianteResource($estudiante), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //GET
        $resources = new EstudianteResource($estudiante);
        return response()->json( $resources, 200 );
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        //PUT
        $estudiante->update( $request->all() );
        return response()->json( new EstudianteResource($estudiante) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        //DELETE
        $estudiante->delete();
        return response()->json( null, 204 );
    }
}
