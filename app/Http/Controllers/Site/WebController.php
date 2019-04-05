<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function index()
    {
        return view('site.home');
    }

    public function about()
    {
        return view('site.about');
    }

    public function information()
    {
        return view('site.information');
    }

    public function howRegisterAthlete()
    {
        return view('site.how-register-athlete');
    }

    public function registerAthlete()
    {
        return view('site.register-athlete');
    }

    public function howRegisterAcademy()
    {
        return view('site.how-register-academy');
    }

    public function registerAcademy()
    {
        return view('site.register-academy');
    }

    public function events()
    {
        return view('site.events');
    }

    public function eventsDetails()
    {
        return view('site.events-details');
    }

    public function news()
    {
        return view('site.news');
    }

    public function contact()
    {
        return view('site.contact');
    }
}
