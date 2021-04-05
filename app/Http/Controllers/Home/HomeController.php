<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(){
        $title = 'Beranda';
        return Inertia::render('Home/Home', [
            'title' => $title
        ]);
    }
}
