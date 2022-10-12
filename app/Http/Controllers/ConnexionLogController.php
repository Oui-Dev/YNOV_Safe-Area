<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConnexionLog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ConnexionLogController extends Controller
{
    public function create(Request $request, $status, $context)
    {
        $log_id = ConnexionLog::create([
            'domain'=>$context, //domaine ou sous domaine
            'status'=>$status, //status de log: Connexion / déconnexion
            'user_agent'=>$request->server('HTTP_USER_AGENT'),
            'ip_address'=>$request->ip(),
            'session_name'=>$request->server('COMPUTERNAME')."/".$request->server('USERNAME'),
            'user_id'=>Auth::user()->id ?? null,
        ])->id;
        if(ConnexionLog::where('user_id',Auth::user()->id)->where('status', 'connexion')->where('user_agent',$request->server('HTTP_USER_AGENT'))->count() == 0)
        {
            $x_user = User::find($id);
//            Mail::to($x_user->professional_email)->send(new NewConnexion($x_user, ConnexionLog::find($log_id)));
        }
    }
}
