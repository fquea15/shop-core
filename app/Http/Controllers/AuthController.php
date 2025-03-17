<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        $title = 'Login de Usuarios';
        return view('modules.auth.login', compact('title'));
    }

    public function login(Request $request) {
        // validate credentials data
        $credencials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // check if user exists
        $user = User::where('email', $credencials['email'])->first();

        if(!$user || !password_verify($credencials['password'], $user->password) ) {
            return back()->with('error', 'Credenciales incorrectas')->with('input', $request->only('email', 'remember'));
        }

        if(!$user->is_active) {
            return back()->with('error', 'Usuario inactivo')->with('input', $request->only('email','remember'));
        }

        // login user
        Auth::login($user);
        $request->session()->regenerate();
        
        return to_route('home');
    }

    public function logout() {
        Auth::logout();
        return to_route('login');
    }

    public function createAdmin() {
        User::create([
            'name' => "F Code",
            'email' => "admin@fcode.dev",
            'password' => Hash::make('admin'),
            'is_admin' => true,
            'is_active' => true,
        ]);

        return "Admin creado";
    }
}
