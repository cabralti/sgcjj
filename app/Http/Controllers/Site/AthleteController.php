<?php

namespace App\Http\Controllers\Site;

use App\Athlete;
use Illuminate\Http\Request;
use App\Http\Requests\Site\Athlete as AthleteRequest;
use App\Http\Controllers\Controller;

class AthleteController extends Controller
{
    public function store(AthleteRequest $request)
    {
        $athlete = Athlete::create($request->all());

        return redirect()->route('site.atletas.registrar-atleta', [
            'athlete_id' => $athlete->id
        ])->with([
            'color' => 'success',
            'icon' => 'fa fa-check',
            'message' => 'Atleta cadastrado com sucesso'
        ]);
    }
}
