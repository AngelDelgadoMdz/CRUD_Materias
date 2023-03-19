<?php

namespace App\Http\Controllers;

use App\Models\Materias;
use Illuminate\Http\Request;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $datos['materias'] = Materias::paginate(10);


        return view('materiasView.index', $datos);
        //En este método vamos a consultar la información

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('materiasView.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosMaterias = request() -> all();
        $datosMaterias = request() -> except('_token');
        //Con la instrucción anterior pedimos que se recolecten todos los valores del form

        Materias::insert($datosMaterias);
        //return response() -> json($datosMaterias);
        //De esta manera se obtiene un token el cual contiene la información de nuestros envíos de formulario
        return redirect('materias');


    }

    /**
     * Display the specified resource.
     */
    public function show(Materias $materias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $materias=Materias::findOrFail($id);
        return view('materiasView.edit', compact('materias')); //revisar
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosMaterias = request() -> except('_token', '_method');


        Materias::where('id','=',$id)->update($datosMaterias);

        $materias=Materias::findOrFail($id);
        return view('materiasView.edit', compact('materias'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Materias::destroy($id);
        return redirect('materias');
    }
}