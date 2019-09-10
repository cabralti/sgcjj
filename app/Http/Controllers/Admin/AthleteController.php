<?php

namespace App\Http\Controllers\Admin;

use App\Academy;
use App\Athlete;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Athlete as AthleteRequest;
use App\Http\Controllers\Controller;

class AthleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $athletes = Athlete::all();
        return view('admin.athletes.index', [
            'athletes' => $athletes
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $athlete = Athlete::where('id', $id)->first();
        return view('admin.athletes.show', [
            'athlete' => $athlete
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $athlete = Athlete::where('id', $id)->first();
        $academies = Academy::all();

        return view('admin.athletes.edit', [
            'athlete' => $athlete,
            'academies' => $academies,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AthleteRequest $request, $id)
    {
        $athlete = Athlete::where('id', $id)->first();
        $athlete->fill($request->all());

        if (!$athlete->save()) {
            return redirect()->back()->withInput()->withErrors();
        }

        $json = [
            'error' => false,
            'message' => 'Atleta atualizado com sucesso!',
            'type' => 'success',
            'redirect' => route('admin.athletes.show', ['athlete' => $athlete->id])
        ];

        return response()->json($json);
    }
}
