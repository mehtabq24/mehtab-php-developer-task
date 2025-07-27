<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/dashboard'; // redirect after login

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Custom login view for admin
    public function showLoginForm()
    {
        return view('admin.auth.new_login'); // your custom login blade
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Use default 'web' guard with custom condition
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Check if user is admin
            if (Auth::user()->is_admin) {
                return redirect()->intended('/admin/dashboard');
            }

            // Not an admin, force logout
            Auth::logout();
            return redirect('/')->withErrors([
                'email' => 'You are not authorized to access the admin panel.',
            ]);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
