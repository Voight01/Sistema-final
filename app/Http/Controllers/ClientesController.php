<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['clientes']=Clientes::paginate(5);
        return view('clientes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $campos=[
            'Nombre'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Cedula'=>'required|string|max:100',
            'Correo_electronico'=>'required|email',
            'Tipo_Poliza'=>'required|string|max:100',
            'Fecha_vigencia'=>'required|string|max:100',
            'Compañia'=>'required|string|max:100'
        ];

        $mensaje=[

            'required'=>'El :attribute es requerido'

        ];

        $this->validate($request, $campos,$mensaje);

        $datosCliente = request()->except('_token');
        Clientes::insert($datosCliente);
        //return response()->json($datosCliente);
        return redirect('clientes')->with('mensaje','Cliente agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Clientes::findOrFail($id);

        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Cedula'=>'required|string|max:100',
            'Correo_electronico'=>'required|email',
            'Tipo_poliza'=>'required|string|max:100',
            'Fecha_vigencia'=>'required|string|max:100',
            'Compañia'=>'required|string|max:100'
        ];

        $mensaje=[

            'required'=>'El :attribute es requerido',

        ];

        $this->validate($request, $campos,$mensaje);


        $datosCliente = request()->except(['_token','_method']);
        Clientes::where('id','=',$id)->update($datosCliente);

        $cliente = Clientes::findOrFail($id);
        //return view('clientes.edit', compact('cliente') );

        return redirect('clientes')->with('mensaje','Cliente Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Clientes::destroy($id);
        return redirect('clientes')->with('mensaje','Cliente Borrado :(');
    }
}
