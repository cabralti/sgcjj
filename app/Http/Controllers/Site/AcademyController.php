<?php

namespace App\Http\Controllers\Site;

use App\Academy;
use App\Http\Requests\Site\Academy as AcademyRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademyController extends Controller
{
    public function store(AcademyRequest $request)
    {
        $academyCreate = Academy::create($request->all());

        return redirect()->route('site.academias.registrar-academia')->with([
            'color' => 'success',
            'icon' => 'fa fa-check',
            'message' => 'Academia cadastrada com sucesso'
        ]);
    }
}
