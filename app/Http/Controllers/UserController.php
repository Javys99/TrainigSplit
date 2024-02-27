<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\Helpers\ResponseTrait;

class UserController extends Controller
{
    use ResponseTrait;

    public function index()
    {
        try {
            $users = User::all();
            return $this->customResponse([
                'view' => 'users.index',
                'data' => $users,
                'message' => 'Listado de usuarios',
                'success' => true,
                'status' => 200
            ]);
        } catch (\Exception $e) {
            return $this->customResponse([
                'message' => "No se pudo obtener el listado de usuarios",
                'exception' => $e->getMessage(),
                'success' => false,
                'status' => 500
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campos=[
            'name'=>'required|string|max:100',
            'last_name'=>'required|string|max:100',
            'gender' => 'required|in:masculino,femenino,otro',
            'email'=>'required|email',
            'avatar'=>'required|max:10000|mimes:jpeg,png,jpg',
            
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'avatar.required'=>'La foto es requerida'

        ];

        $this->validate($request,$campos,$mensaje);
    
    $datosCliente = $request->except('_token');

    if($request->hasFile('avatar')){
        $datosCliente['avatar']=$request->file('avatar')->store('uploads','public');
    }

    User::create($datosCliente);
    

    return redirect('users')->with('mensaje', 'Cliente agregado con exito');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        
        return view('users.show', compact('user'));
       
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $user=User::findOrFail($id);
        return view('users.edit', compact ('user') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'name'=>'required|string|max:100',
            'last_name'=>'required|string|max:100',
            'middle_name'=>'required|string|max:100',
            'email'=>'required|email',
            'profile_picture'=>'required|max:10000|mimes:jpeg,png,jpg',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'profile_picture.required'=>'La foto es requerida'

        ];

        if($request->hasFile('profile_picture')){
            
            $campos=['profile_picture'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['profile_picture.required'=>'La foto es requerida'];

        }

        $this->validate($request,$campos,$mensaje);



        $datosCliente = request()->except(['_token','_method']);

        if($request->hasFile('profile_picture')){
            $user=User::findOrFail($id);
            Storage::delete(['public/'.$user->foto_perfil]);
            $datosCliente['profile_picture']=$request->file('profile_picture')->store('uploads','public');
        }

        User::where('id','=',$id)->update($datosCliente);

        $user=User::findOrFail($id);
        return redirect('users')->with('mensaje','Cliente Modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        if(Storage::delete('public/'.$user->foto_perfil)){
            User::destroy($id);
        }
        return redirect('users');

    }
}
