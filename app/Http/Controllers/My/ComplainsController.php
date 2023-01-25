<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use App\Models\Complain;
use http\Client\Curl\User;
class ComplainsController extends Controller
{
    public function list() {
        $user = auth()->user();
        $complains = $user->hasPermissionTo("admin_access")
            ? Complain::select('*')
            : $user->complains();

        $complains = $complains->with('user')->with('assignedUser')->where('deleted_at', NULL)->paginate(20);
        return inertia('My/Complains/List', [
            'complains' => $complains,
        ]);
    }

    public function delete(Complain $complain) {
        $complain->deleted_at=now();
        $complain->save();
        return redirect()->route('my.auth.complains.list')->with('toast', [
            'type' => 'success',
            'message' => "Plainte supprimée avec succès",
        ]);
    }


}
