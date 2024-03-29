<?php

namespace App\Http\Controllers\Admin;

use App\Academy;
use App\Document;
use App\Http\Requests\Admin\Academy as AcademyRequest;
use App\Status;
use App\Support\Cropper;
use App\Teacher;
use App\TypeDocument;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

        $count_documents = Document::select('type_document', DB::raw('COUNT(id) as qty_documents'))
            ->where('academy', $academy->id)
            ->groupBy('type_document');

        $typeDocuments = TypeDocument::select()
            ->where('academy_has', true)
            ->leftJoinSub($count_documents, 'count_documents', function ($join) {
                $join->on('type_documents.id', '=', 'count_documents.type_document');
            })
            ->get();

        return view('admin.academies.show', [
            'academy' => $academy,
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
        $academy = Academy::where('id', $id)->first();
        $teachers = Teacher::all();
        $status = Status::all();

        $count_documents = Document::select('type_document', DB::raw('COUNT(id) as qty_documents'))
            ->where('academy', $academy->id)
            ->groupBy('type_document');

        $typeDocuments = TypeDocument::select()
            ->where('academy_has', true)
            ->leftJoinSub($count_documents, 'count_documents', function ($join) {
                $join->on('type_documents.id', '=', 'count_documents.type_document');
            })
            ->get();

        return view('admin.academies.edit', [
            'academy' => $academy,
            'teachers' => $teachers,
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
    public function update(AcademyRequest $request, $id)
    {
        $academy = Academy::where('id', $id)->first();
        $academy->fill($request->all());

        if (!$academy->save()) {
            return redirect()->back()->withInput()->withErrors();
        }

        if ($request->hasFile('documents')) {
            foreach ($request->documents as $key => $document) {
                $documents = new Document();
                $documents->academy = $id;
                $documents->type_document = $request->type_document[$key];
                $documents->name = $document->getClientOriginalName();
                $documents->path = $document->store('academies/' . $id);
                $documents->save();
                unset($documents);
            }
        }

        // Upload de Documentos
//        if (isset($request->allFiles()['document_record'])) {
//            foreach ($request->allFiles()['document_record'] as $key => $documentRecord) {
//                $documents = new Document();
//                $documents->academy = $id;
//                $documents->type_document = 1; // Ficha de Registro
//                $documents->name = 'Ficha_de_Registro_' . $key;
//                $documents->path = $documentRecord->store('academies/' . $id);
//                $documents->save();
//                unset($documents);
//            }
//        }
//
//        if (isset($request->allFiles()['document_certificate'])) {
//            foreach ($request->allFiles()['document_certificate'] as $key => $documentCertificate) {
//                $documents = new Document();
//                $documents->academy = $id;
//                $documents->type_document = 2; // Certificado de faixa do professor responsável
//                $documents->name = 'Certificado_do_Professor_' . $key;
//                $documents->path = $documentCertificate->store('academies/' . $id);
//                $documents->save();
//                unset($documents);
//            }
//        }

        $json['error'] = false;
        $json['message'] = 'Academia alterada com sucesso!';
        $json['type'] = 'success';
        $json['redirect'] = route('admin.academies.show', ['academy' => $academy->id]);

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

    public function documentDelete(Request $request)
    {
        $documentDelete = Document::where('id', $request->document)->first();

        Storage::delete($documentDelete->path);
        Cropper::flush($documentDelete->path);
        $documentDelete->delete();

        $json = [
            'error' => false,
            'message' => 'Documento excluído com sucesso',
            'type' => 'success',
            'redirect' => route('admin.academies.documentDelete')
        ];

        return response()->json($json);
    }
}
