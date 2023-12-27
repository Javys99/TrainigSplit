<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $datos['plan']=Plan::all();
        return view('plan.index',$datos);
    }

    public function create()
    {
        return view('plan.create');
    }

    public function store(Request $request)
    {
        $campos=[
            'plan'=>'required',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
        ];

        $this->validate($request,$campos,$mensaje);

    $datosPlan = $request->except('_token');

    Plan::create($datosPlan);

    

    return redirect('plan')->with('mensaje', 'Cliente agregado con exito');

    }

    public function edit( $id)
    {
        $plan=Plan::findOrFail($id);
        return view('plan.edit', compact ('plan') );
    }

    public function update(Request $request, $id) 
    {
        $campos=[
            'plan'=>'required',
        ];

        $this->validate($request,$campos);

        $datosPlan = request()->except(['_token','_method']);

        Plan::where('id','=',$id)->update($datosPlan);

        $plan=Plan::findOrFail($id);
        return redirect('plan');
    }

    public function destroy($id)
    {
        Plan::destroy($id);
        return redirect('plan');
    }

}
