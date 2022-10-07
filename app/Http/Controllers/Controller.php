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

    public function getAdresse($ville_id, $adresse)
    {
        $tmp2 = Http::get(config('import.GOUV_API_URL').'?q='.Str::replace(' ','%20',$adresse).
        '&citycode='.$ville_id.'&type=housenumber&autocomplete=true');
        return $tmp2['features'][0]['properties']['label'];
    }

    public function getMapsUrl($ville_id, $adresse)
    {
        $tmp2 = Http::get(config('import.GOUV_API_URL').'?q='.Str::replace(' ','%20',$adresse).
        '&citycode='.$ville_id.'&type=housenumber&autocomplete=true');
        return "https://www.google.fr/maps/@".$tmp2['features'][0]['geometry']['coordinates'][1].",".$tmp2['features'][0]['geometry']['coordinates'][0].",20.25z";
    }

    public function searchAdresse($adresse)
    {
        $result = Http::get(config('import.GOUV_API_URL').'?q='.Str::replace(' ','%20',$adresse).'&type=housenumber&autocomplete=true');
        return ['ville_id'=>$result['features'][0]['properties']['citycode'],'adresse'=>$result['features'][0]['properties']['name']];
    }

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
