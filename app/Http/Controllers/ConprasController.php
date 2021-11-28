<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compras;
use App\Proveedor;
use Maatwebsite\Excel\Facades\Excel;

class ConprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras= Compras::select('id_compras','proveedor.empresa','Fecha_compra','monto','descripcion')
        ->join('proveedor','proveedor.id','=','compras.id_proveedor')
        ->get();
        return view('home.index',compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedor= Proveedor::all();
        return view('home.create',compact('proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fecha_compra' => 'required|date',
            'id_proveedor' => 'required',
            'monto' => 'required|numeric',
            'descripcion' => 'required|max:255',
        ],[
            'fecha_compra.required' => 'la fecha de compra es requerida',
            'id_proveedor.required' => 'El proveedor es requerida',
            'monto.required' => 'El monto es requerida',
            'descripcion.required' => 'la descripcion es requerida',

        ]);
        $show = Compras::create($validatedData);

        return redirect('listar')->with('success', 'El regitro se agrego correctamente');
        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compras = Compras::findOrFail($id);
        $proveedor= Proveedor::all();

        return view('home.editar', compact('compras','proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_compras)
    {
        // dd($request);
        $validatedData = $request->validate([
            'fecha_compra' => 'required|date',
            'id_proveedor' => 'required',
            'monto' => 'required|numeric',
            'descripcion' => 'required|max:255',
        ],[
            'fecha_compra.required' => 'la fecha de compra es requerida',
            'id_proveedor.required' => 'El proveedor es requerida',
            'monto.required' => 'El monto es requerida',
            'descripcion.required' => 'la descripcion es requerida',

        ]);
        Compras::where('id_compras','=',$id_compras)->update($validatedData);

        return redirect('listar')->with('success', 'Se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Compras = Compras::findOrFail($id);
        $Compras->delete();
        return redirect('listar')->with('success', 'Se ha eliminado correctamente');
    }

}
