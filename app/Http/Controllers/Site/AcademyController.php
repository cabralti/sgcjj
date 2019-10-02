<?php

namespace App\Http\Controllers\Site;

use App\Academy;
use App\Http\Requests\Site\Academy as AcademyRequest;
use App\Mail\fichaRegistroAcademia;
use App\Teacher;
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

    public function fichaDeFiliacao()
    {

        $academy = Academy::find(4);
        Mail::to("cabral.9santos@gmail.com")->send(new fichaRegistroAcademia($academy));

//        eltonfplp@gmail.com
//        return new fichaRegistroAcademia($academy);


//
//        $info = ["info"=>$academy];
//
//        Mail::send(["text"=>"mail"], $info, function($message){
//
//            $pdf = \PDF::loadView("site.pdfs.registration-academy", compact('academy'))->stream('nome-arquivo-pdf-gerado.pdf');
//
//            $message->to("cabral.9santos@gmail.com","Gabriel Santos Cabral")->subject("Send Mail from Laravel");
//            $message->from("gabriel.cabral@seduc.pa.gov.br","Gabriel Seduc");
//            $message->attachData($pdf->stream(), "filename.pdf");
//
//        });

//        $academy = Academy::find(4);
//        return \PDF::loadView('site.pdfs.registration-academy', compact('academy'))
//            // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
//            ->stream('nome-arquivo-pdf-gerado.pdf');
    }
}
