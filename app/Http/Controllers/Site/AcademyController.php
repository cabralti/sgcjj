<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\Site\Academy as AcademyRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademyController extends Controller
{
    public function store(AcademyRequest $request)
    {
        dd($request->all());
    }
}
