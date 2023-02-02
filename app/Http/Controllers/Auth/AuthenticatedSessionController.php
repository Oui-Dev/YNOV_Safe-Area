<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Test;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return view('pages/login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        if(in_array('root', auth()->user()->roles->pluck('name')->toArray())) {
            return redirect()->route('console.auth.dashboard.index');
        } else {
            return redirect()->route('my.auth.dashboard.index');
        }
    }


    /**
     * Destroy an authenticated session.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
