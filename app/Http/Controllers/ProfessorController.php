<?php

namespace App\Http\Controllers;

use App\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Professor::all();
        return view('admin.professor.index', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.professor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /** @var Professor $registro */
        $registro = new Professor();

        $registro->nome = $request->nome;
        $registro->email = $request->email;
        $registro->cpf = $request->cpf;
        $registro->celular = $request->celular;
        $registro->faixa = $request->faixa;

        $registro->save();

        return redirect()->route('professor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Professor $professor
     * @return \Illuminate\Http\Response
     */
    public function show(Professor $professor)
    {
        $registro = Professor::find($professor)->first();

        return view('admin.professor.show', compact('registro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Professor $professor
     * @return \Illuminate\Http\Response
     */
    public function edit(Professor $professor)
    {
        $registro = Professor::find($professor)->first();
        return view('admin.professor.edit', compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Professor $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professor $professor)
    {
        /** @var Professor $registro */
        $registro = Professor::find($professor->id);

        $registro->nome = $request->nome;
        $registro->email = $request->email;
        $registro->cpf = $request->cpf;
        $registro->celular = $request->celular;
        $registro->faixa = $request->faixa;

        $registro->update();
        
        return redirect()->route('professor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professor $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy($professor)
    {
        Professor::find($professor)->delete();

        return redirect()->route('professor.index');
    }
}
