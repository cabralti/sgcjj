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
        $academy = new Academy();
        $academy->fill($request->all());

        dd($academy->getAttributes(), $request->all());
    }
}
