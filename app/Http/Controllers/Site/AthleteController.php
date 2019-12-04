<?php

namespace App\Http\Controllers\Site;

use App\Athlete;
use App\Mail\fichaRegistroAtleta;
use Illuminate\Http\Request;
use App\Http\Requests\Site\Athlete as AthleteRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class AthleteController extends Controller
{
    public function store(AthleteRequest $request)
    {
        $athlete = Athlete::create($request->all());

        // enviar e-mail de filiação
        if ($this->sendRegistrationEmail($athlete->id)) {
            return redirect()->route('site.atletas.registrar-academia', ['athlete_id' => $athlete->id])->with([
                'color' => 'success',
                'icon' => 'fa fa-check',
                'message' => 'Atleta cadastrado com sucesso',
            ]);
        } else {
            return redirect()->route('site.atletas.registrar-academia')->with([
                'color' => 'warning',
                'icon' => 'fa fa-check',
                'message' => 'Atleta cadastrado com sucesso, porém ocorreu um erro no envio da ficha de filiação para o e-mail do atleta. Entre em contato com a LPJJ, atráves do e-mail contato@lpjj.com'
            ]);
        }
    }

    public function sendRegistrationEmail($id)
    {
        $athlete = Athlete::find($id);

        if ($athlete) {
            $pdf = \PDF::loadView('site.pdfs.registration-athlete', ['athlete' => $athlete])
                // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                ->stream();
            Mail::to($athlete->email)->send(new fichaRegistroAtleta($athlete, $pdf));

            return true;
        }

        return false;
    }
}
