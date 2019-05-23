<?php

namespace App\Http\Controllers;

use App\Support\Message;
use App\Support\Seo;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //    protected $seo;
    protected $message;

    public function __construct()
    {
        //        $this->seo = new Seo();
        $this->message = new Message();
    }
}
