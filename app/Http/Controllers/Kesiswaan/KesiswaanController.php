<?php

namespace App\Http\Controllers\Kesiswaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class KesiswaanController extends Controller
{
    public function index(){
        $title = 'Dashboard Kesiswaan';
        return Inertia::render('Kesiswaan/DashboardKesiswaan', [
            'title' => $title
        ]);
    }
}
