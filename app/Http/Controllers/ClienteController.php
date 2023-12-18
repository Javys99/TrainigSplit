<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cliente.index');
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
            'nombre' => 'required|string|max:100',
            'apellido_paterno' => 'required|string|max:100',
            'apellido_materno' => 'required|string|max:100',
            'correo' => 'required|unique:cliente_online,correo|email',
            'contrasenia' => 'required|min:8',
            'contrasenia_confirmacion' => 'required|same:contrasenia',
            'foto_perfil' => 'required|max:10000|mimes:jpeg,png,jpg',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'correo.unique'=>'Correo ya registrado',
            'contrasenia.min'=>'Ingresa una contrasenia valida',
            'contrasenia_confirmacion.same'=>'Las contrasenia no coinciden',
            'foto_perfil.required'=>'La foto es requerida'
        ];

        
        $validaciones= validator($request->all(),$campos,$mensaje);
        if($validaciones->fails()){
            return $validaciones->errors()->all();
        }

        $datosClienteonline = request()->except('_token');
        if($request->hasFile('foto_perfil')){
            $datosClienteonline['foto_perfil']=$request->file('foto_perfil')->store('uploads','public');
        }
        Cliente::create($datosClienteonline);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
