<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthPengelolaController extends Controller
{
    public function login(Request $request){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            dd($request);
        } else {
            $title = "Login Pengelola";
            return Inertia::render('LoginPengelola', [
                'title' => $title
            ]);
        }
        
    }
}
