<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityLogController extends Controller
{
    public function create(Request $request, $type, $context, $message)
    {
        $log_id = ActivityLog::create([
            'domain'=>$context, //domaine ou sous domaine
            'type'=>$type, //type de log: log, notice, info, warning, error, alert, critical, emergency,
            'label'=>$message,
            'user_agent'=>$request->server('HTTP_USER_AGENT'),
            'ip_address'=>$request->ip(),
            'session_name'=>$request->server('COMPUTERNAME')."/".$request->server('USERNAME'),
            'user_id'=>Auth::user()->id ?? null
        ])->id;
        if($type == "critical" || $type == "emergency")
        {
            //envoie email à admin
            $x_user = User::find(1);
//            Mail::to($x_user->professional_email)->send(new BeatLog($x_user, ActivityLog::find($log_id)));
        }
    }
}
