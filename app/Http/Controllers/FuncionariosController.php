<?php

namespace App\Http\Controllers;

use App\Models\Funcionarios;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionarios::all();

        return view('funcionarios', ['funcionarios' => $funcionarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createFuncionario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funcionario = new Funcionarios();
        $funcionario->nome = $request->nome;
        $funcionario->data_nascimento = $request->data_nascimento;
        $funcionario->status = $request->status;
        $funcionario->save();

       return redirect()->route('employers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionarios $employer)
    {
        return view('listFuncionario', ['funcionario' => $employer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcionarios $employer)
    {
        return view('editFuncionario', ['funcionario' => $employer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionarios $employer)
    {
        if (!empty($request->nome))
        {
            $employer->nome = $request->nome;
        }
        if (!empty($request->data_nascimento))
        {
            $employer->data_nascimento = $request->data_nascimento;
        }
        if (($employer->status != $request->status) && ($request-status != ""))
        {
            $employer->status = $request->status;
        }
        $employer->save();

        return redirect()->route('employers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionarios $employer)
    {
        $employer->delete();

        return redirect()->route('employers.index');
    }
}
