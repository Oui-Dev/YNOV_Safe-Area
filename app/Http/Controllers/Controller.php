<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Pour créer un log en DB, utiliser:
    // app('App\Http\Controllers\ActivityLogController')->create();

    // Pour créer un log de connexion/déconnexion en DB, utiliser
    // app('App\Http\Controllers\ConnexionController')->create();

    public function webPing($url)
    {
        $tmp = Http::get($url)->status();
        if($tmp == 200 || $tmp == 301) {return "online";}
        else {return "offline";}
    }
}
