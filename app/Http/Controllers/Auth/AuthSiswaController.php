<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthSiswaController extends Controller
{
    public function login(Request $request)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $request->email;
            $password = $request->password;
            try {
                $auth = Auth::guard('siswa')->attempt([
                    'email' => $email,
                    'password' => $password
                ]);
            } catch (\Exception $e) {
                if ($e->getCode() == 2002) {
                    $message = 'Database Tidak Terkonseksi!';
                    return Redirect::route('get.loginSiswa')->with('message', $message);
                } else {
                    $message = 'Unknown Error!';
                    return Redirect::route('get.loginSiswa')->with('message', $message);
                }
                return false;
            }

            if ($auth) {
                return Redirect::route('get.indexSiswa');
            } else {
                $message = 'Anda Bukan Siswa!';
                return Redirect::route('get.loginSiswa')->with('message', $message);
            }
            
        } else {
            $title = 'Login Siswa';
            return Inertia::render('Auth/LoginSiswa', [
                'title' => $title
            ]);
        }
        
    }

    public function logout()
    {
        Auth::guard('siswa')->logout();
        return Redirect::route('get.loginSiswa');
    }
}
