<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $datos['clientes']=User::all();
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
            'foto_perfil.required'=>'La foto es requerida'

        ];

        $this->validate($request,$campos,$mensaje);

    $datosCliente = $request->except('_token');

    if($request->hasFile('foto_perfil')){
        $datosCliente['foto_perfil']=$request->file('foto_perfil')->store('uploads','public');
    }

    User::create($datosCliente);
    

    return redirect('cliente')->with('mensaje', 'Cliente agregado con exito');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $cliente)
    {
        //
    }
    public function info($idCliente)
    {
        $cliente=User::findOrFail($idCliente);
        return view('cliente.info');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $cliente=User::findOrFail($id);
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
            'foto_perfil'=>'required|max:10000|mimes:jpeg,png,jpg'
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'foto_perfil.required'=>'La foto es requerida'

        ];

        if($request->hasFile('foto_perfil')){
            
            $campos=['foto_perfil'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['foto_perfil.required'=>'La foto es requerida'];

        }

        $this->validate($request,$campos,$mensaje);



        $datosCliente = request()->except(['_token','_method']);

        if($request->hasFile('foto_perfil')){
            $cliente=User::findOrFail($id);
            Storage::delete(['public/'.$cliente->foto_perfil]);
            $datosCliente['foto_perfil']=$request->file('foto_perfil')->store('uploads','public');
        }

        User::where('id','=',$id)->update($datosCliente);

        $cliente=User::findOrFail($id);
        return redirect('cliente')->with('mensaje','Cliente Modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente=User::findOrFail($id);
        if(Storage::delete('public/'.$cliente->foto_perfil)){
            User::destroy($id);
        }
        return redirect('cliente');

    }
}
