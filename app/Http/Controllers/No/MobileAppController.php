<?php

namespace App\Http\Controllers\No;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MobileAppController extends Controller
{
    public function create()
    {
        return view('pages/No/application');
    }

    public function store(Request $request)
    {
        app('App\Http\Controllers\ActivityLogController')->create($request, 'info', 'NO', "Téléchargement de l'application Android à ".now()->format('d/m/Y H:i'));
        Log::info("Téléchargement de l'application Android à ".now()->format('d/m/Y H:i'));
        $file= public_path(). "/safe-area.apk";
        $headers = array(
            'Content-Type: application/apk',
        );
        return response()->download($file, 'safe-area.apk', $headers);
    }
}
