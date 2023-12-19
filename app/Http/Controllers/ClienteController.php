<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['clientes']=Cliente::all();
        return view('cliente.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campos=[
            'nombre'=>'required|string|max:100',
            'apellido_paterno'=>'required|string|max:100',
            'apellido_materno'=>'required|string|max:100',
            'correo'=>'required|email',
            'foto_perfil'=>'required|max:10000|mimes:jpeg,png,jpg',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'foto.required'=>'La foto es requerida'

        ];

        $this->validate($request,$campos,$mensaje);

    $datosCliente = $request->except('_token');

    if($request->hasFile('foto_perfil')){
        $datosCliente['foto_perfil']=$request->file('foto_perfil')->store('uploads','public');
    }

    Cliente::create($datosCliente);
    

    return redirect('cliente')->with('mensaje', 'Cliente agregado con exito');

    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }
    public function info($idCliente)
    {
        $cliente=Cliente::findOrFail($idCliente);
        return view('cliente.info');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $cliente=Cliente::findOrFail($id);
        return view('cliente.edit', compact ('cliente') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'nombre'=>'required|string|max:100',
            'apellido_paterno'=>'required|string|max:100',
            'apellido_materno'=>'required|string|max:100',
            'correo'=>'required|email',
            
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
           

        ];

        if($request->hasFile('foto')){
            
            $campos=['foto'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['foto.required'=>'La foto es requerida'];

        }

        $this->validate($request,$campos,$mensaje);



        $datosCliente = request()->except(['_token','_method']);

        if($request->hasFile('foto')){
            $cliente=Cliente::findOrFail($id);
            Storage::delete(['public/'.$cliente->foto]);
            $datosCliente['foto']=$request->file('foto')->store('uploads','public');
        }

        Cliente::where('id','=',$id)->update($datosCliente);

        $cliente=Cliente::findOrFail($id);
        return redirect('cliente')->with('mensaje','Cliente Modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente=Cliente::findOrFail($id);
        if(Storage::delete('public/'.$cliente->foto_perfil)){
            Cliente::destroy($id);
        }
        return redirect('cliente');

    }
}
