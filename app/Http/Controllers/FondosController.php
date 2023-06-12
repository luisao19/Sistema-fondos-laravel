<?php

namespace App\Http\Controllers;

use App\Models\Fondos;
use Illuminate\Http\Request;

class FondosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['fondos']=Fondos::paginate(5);
        return view('fondos.index',$datos);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
{
    //$fondos = new Fondos(); // Crea una nueva instancia de Fondos

    //return view('fondos.create', compact('fondos'));
}
       return view('fondos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $datosFondos = request()->all();
        $datosFondos = request()->except('_token');
        Fondos::insert($datosFondos);
        //return response()->json($datosFondos);
        return  redirect('fondos')->with('mensaje','Fondos agregados con exito');
    }

    /**
     * Display the specified resource.
     */         
    public function show(Fondos $fondos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $fondos=Fondos::findOrFail($id);
        return view('fondos.edit', compact('fondos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $datosFondos = $request->except(['_token', '_method']);
    Fondos::where('id', $id)->update($datosFondos);

    $fondos = Fondos::findOrFail($id);
    return view('fondos.edit', compact('fondos'));
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Fondos::destroy($id);
        return  redirect('fondos')->with('mensaje','Fondos agregados con exito');
    }
}
