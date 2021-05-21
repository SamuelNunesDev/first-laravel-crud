<?php

namespace App\Http\Controllers;

use App\Models\Cargos;
use App\Models\Empresas;
use App\Models\Funcionarios;
use App\Models\User;
use App\Models\Vinculos;
use Illuminate\Http\Request;

class VinculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $vinculos = Vinculos::all();

        foreach ($vinculos as $vinculo)
        {
            $funcionarios[$vinculo->vinculo_id] = Funcionarios::where('funcionario_id', $vinculo->funcionario_id)
                ->first();
            $cargos[$vinculo->vinculo_id] = Cargos::where('cargo_id', $vinculo->cargo_id)->first();
            $empresas[$vinculo->vinculo_id] = Empresas::where('empresa_id', $vinculo->empresa_id)->first();
            $created_at[$vinculo->vinculo_id] = $vinculo->created_at;

            if (($funcionarios[$vinculo->vinculo_id]->status == 0) || ($empresas[$vinculo->vinculo_id]->status == 0) ||
                ($cargos[$vinculo->vinculo_id]->status == 0))
                {
                    $vinculo->status = 0;
                }
            else
            {
                $vinculo->status = 1;
            }
        }

        return view('vinculos', [
            'vinculos' => $vinculos,
            'funcionarios' => $funcionarios,
            'cargos' => $cargos,
            'empresas' => $empresas,
            'status' => $vinculo->statusss,
            'created_at' => $created_at
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createVinculo',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Vinculos $vinculo)
    {
        $vinculo->funcionario_id = $request->funcionario_id;
        $vinculo->cargo_id = $request->cargo_id;
        $vinculo->empresa_id = $request->empresa_id;
        $vinculo->save();

        return redirect()->route('bonds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vinculos  $vinculos
     * @return \Illuminate\Http\Response
     */
    public function show($vinculo)
    {
        $vinculo = Vinculos::where('vinculo_id', $vinculo)->first();
        $funcionario = Funcionarios::where('funcionario_id', $vinculo->funcionario_id)->first();
        $cargo = Cargos::where('cargo_id', $vinculo->empresa_id)->first();
        $empresa = Empresas::where('empresa_id', $vinculo->empresa_id)->first();

        return view('listVinculo', [
            'vinculo' => $vinculo,
            'funcionario' => $funcionario,
            'cargo' => $cargo,
            'empresa' => $empresa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vinculos  $vinculos
     * @return \Illuminate\Http\Response
     */
    public function edit(Vinculos $bond)
    {
        return view('editVinculo', ['vinculo' => $bond]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vinculos  $vinculos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vinculos $bond)
    {
        if ($request->funcionario_id)
        {
            $bond->funcionario_id = $request->funcionario_id;
        }
        if ($request->cargo_id)
        {
            $bond->cargo_id = $request->cargo_id;
        }
        if ($request->empresa_id)
        {
            $bond->empresa_id = $request->empresa_id;
        }
        $bond->save();

        return redirect()->route('bonds.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vinculos  $vinculos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vinculos $bond)
    {
        $bond->delete();

        return redirect()->route('bonds.index');
    }
    public function optionTable(Request $option)
    {
        $route = $option->op.'.index';
        return redirect()->route($route);
    }
}
