<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('site.home');
    }

    public function about()
    {
        return view('site.about');
    }

    public function tableWeights()
    {
        //        return view('site.table-weights');
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
