<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.Console.public.login');
    }

    public function login(LoginRequest $request)
    {
        $this->validate($request, [
            'identifiant' => 'required',
            'password' => 'required',
        ]);
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->route('console.auth.dashboard.index');
    }

    /**
     * Destroy an authenticated session.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('console.public.index');
    }
}
