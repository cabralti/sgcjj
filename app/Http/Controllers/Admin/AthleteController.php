<?php

namespace App\Http\Controllers\Admin;

use App\Academy;
use App\Athlete;
use App\Document;
use App\Status;
use App\TypeDocument;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Athlete as AthleteRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
        $count_documents = Document::select('type_document', DB::raw('COUNT(id) as qty_documents'))
            ->where('athlete', $athlete->id)
            ->groupBy('type_document');

        $typeDocuments = TypeDocument::select()
            ->where('athlete_has', true)
            ->leftJoinSub($count_documents, 'count_documents', function ($join) {
                $join->on('type_documents.id', '=', 'count_documents.type_document');
            })
            ->get();

        return view('admin.athletes.show', [
            'athlete' => $athlete,
            'typeDocuments' => $typeDocuments
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
        $status = Status::all();

        $count_documents = Document::select('type_document', DB::raw('COUNT(id) as qty_documents'))
            ->where('athlete', $athlete->id)
            ->groupBy('type_document');

        $typeDocuments = TypeDocument::select()
            ->where('athlete_has', true)
            ->leftJoinSub($count_documents, 'count_documents', function ($join) {
                $join->on('type_documents.id', '=', 'count_documents.type_document');
            })
            ->get();

        return view('admin.athletes.edit', [
            'athlete' => $athlete,
            'academies' => $academies,
            'status' => $status,
            'typeDocuments' => $typeDocuments
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

        if ($request->hasFile('documents')) {
            foreach ($request->documents as $key => $document) {
                $documents = new Document();
                $documents->athlete = $id;
                $documents->type_document = $request->type_document[$key];
                $documents->name = $document->getClientOriginalName();
                $documents->path = $document->store('athletes/' . $id);
                $documents->save();
                unset($documents);
            }
        }

        $json = [
            'error' => false,
            'message' => 'Atleta atualizado com sucesso!',
            'type' => 'success',
            'redirect' => route('admin.athletes.show', ['athlete' => $athlete->id])
        ];

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
        $athlete = Athlete::where('id', $id)->first();

        if (!$athlete->delete()) {
            $json = [
                'success' => false,
                'type' => 'warning',
                'msg' => 'Erro ao excluir. Entre em contato com o administrador!'
            ];

            return response()->json($json);
        }

        $json = [
            'success' => true,
            'type' => 'success',
            'msg' => 'Registro excluído com sucesso!',
            'redirect' => route('admin.athletes.index')
        ];

        return response()->json($json);
    }
}
