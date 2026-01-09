<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Redirect user after login based on role
     */
    protected function redirectTo()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            return route('admin.dashboard');
        }

        if ($user->role === 'dokter') {
            return route('dokter.dashboard');
        }

        return route('user.dashboard');
    }

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
