<?php

namespace App\Http\Controllers\Admin;

use App\Athlete;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
