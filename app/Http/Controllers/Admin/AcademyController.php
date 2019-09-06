<?php

namespace App\Http\Controllers\Admin;

use App\Academy;
use App\Http\Requests\Admin\Academy as AcademyRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academies = Academy::all();
        return view('admin.academies.index', [
            'academies' => $academies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.academies.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $academy = Academy::where('id', $id)->first();
        return view('admin.academies.show', [
            'academy' => $academy
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
        $academy = Academy::where('id', $id)->first();
        return view('admin.academies.edit', [
            'academy' => $academy
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AcademyRequest $request, $id)
    {
        $academy = Academy::where('id', $id)->first();
        $academy->fill($request->all());

        if (!$academy->save()) {
            return redirect()->back()->withInput()->withErrors();
        }

        $json['error'] = false;
        $json['message'] = 'Academia alterada com sucesso!';
        $json['type'] = 'success';

        return response()->json($json);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
