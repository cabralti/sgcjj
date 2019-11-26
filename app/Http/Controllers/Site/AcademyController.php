<?php

namespace App\Http\Controllers\Site;

use App\Academy;
use App\Http\Requests\Site\Academy as AcademyRequest;
use App\Mail\fichaRegistroAcademia;
use App\Teacher;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
            $teacher->status = 2;
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

            // enviar e-mail de filiação
            if ($this->sendRegistrationEmail($academy->id)) {
                return redirect()->route('site.academias.registrar-academia')->with([
                    'color' => 'success',
                    'icon' => 'fa fa-check',
                    'message' => 'Academia cadastrada com sucesso'
                ]);
            } else {
                return redirect()->route('site.academias.registrar-academia')->with([
                    'color' => 'warning',
                    'icon' => 'fa fa-check',
                    'message' => 'Academia cadastrada com sucesso, porém ocorreu um erro no envio da ficha de filiação para o e-mail da academia. Entre em contato com a LPJJ, atráves do e-mail contato@lpjj.com'
                ]);
            }

        } else {
            // fail, desfaz as alterações no banco de dados
            DB::rollBack();
        }

    }

    public function sendRegistrationEmail($id)
    {
        $academy = Academy::find($id);

        if ($academy) {
            $pdf = \PDF::loadView('site.pdfs.registration-academy', ['academy' => $academy])
                // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                ->stream();
            Mail::to($academy->email)->send(new fichaRegistroAcademia($academy, $pdf));

            return true;
        }

        return false;
    }
}
