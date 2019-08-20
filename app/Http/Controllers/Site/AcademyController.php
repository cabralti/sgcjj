<?php

namespace App\Http\Controllers\Site;

use App\Academy;
use App\Http\Requests\Site\Academy as AcademyRequest;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AcademyController extends Controller
{
    public function store(AcademyRequest $request)
    {
        // start database transaction
        DB::beginTransaction();

        // recupera os dados do formulário
        $dataForm = $request->all();

        // check teacher
        $teacher = Teacher::where('document', '=', $dataForm['teacher_document'])->first();

        // search teacher
        if (!$teacher) {
            $teacher = new Teacher();
            $teacher->name = $dataForm['teacher_name'];
            $teacher->band = $dataForm['teacher_band'];
            $teacher->document = $dataForm['teacher_document'];
            $teacher->document_secondary = $dataForm['teacher_document_secondary'];
            $teacher->cell = $dataForm['teacher_cell'];
            $teacher->email = $dataForm['teacher_email'];
            $teacher->save();
        }

        // academy
        $academy = new Academy();
        $academy->teacher = $teacher->id;
        $academy->name = $dataForm['name'];
        $academy->social_name = $dataForm['social_name'];
        $academy->academy_document = $dataForm['academy_document'];
        $academy->email = $dataForm['email'];
        $academy->telephone = $dataForm['telephone'];
        $academy->zipcode = $dataForm['zipcode'];
        $academy->street = $dataForm['street'];
        $academy->neighborhood = $dataForm['neighborhood'];
        $academy->state = $dataForm['state'];
        $academy->city = $dataForm['city'];
        $newAcademy = $academy->save();

        if ($teacher->id && $newAcademy) {
            // sucesso
            DB::commit();

            return redirect()->route('site.academias.registrar-academia')->with([
                'color' => 'success',
                'icon' => 'fa fa-check',
                'message' => 'Academia cadastrada com sucesso'
            ]);
        } else {
            // fail, desfaz as alterações no banco de dados
            DB::rollBack();
        }

    }
}
