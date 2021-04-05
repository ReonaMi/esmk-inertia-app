<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthPengelolaController extends Controller
{
    public function login(Request $request){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $request->email;
            $password = $request->password;
            try {
                $auth = Auth::guard('pengelola')->attempt([
                    'email' => $email,
                    'password' => $password
                ]);
            } catch (\Exception $e) {
                if ($e->getCode() == 2002) {
                    $message = 'Database Tidak Terkoneksi!';
                    return Redirect::route('get.loginPengelola')->with('message', $message);
                } else {
                    $message = 'Unknown Error!';
                    return Redirect::route('get.loginPengelola')->with('message', $message);
                }
                return false;
            }
            
            if ($auth) {
                $checkRole = Auth::guard('pengelola')->user();
                if ($checkRole->hasRole('superadmin')) {
                    return Redirect::route('get.indexSuperadmin');
                }elseif ($checkRole->hasRole('kesiswaan')) {
                    return Redirect::route('get.indexKesiswaan');
                }elseif ($checkRole->hasRole('toolman')) {
                    return Redirect::route('get.indexToolman');
                }
            } else {
                $message = 'Anda Bukan Pengelola';
                return Redirect::route('get.loginPengelola')->with('message', $message);
            }
            
        } else {
            $title = "Login Pengelola";
            return Inertia::render('Auth/LoginPengelola', [
                'title' => $title
            ]);
        }
    }

    public function logout(){
        Auth::guard('pengelola')->logout();
        return Redirect::route('get.loginPengelola');
    }
}
