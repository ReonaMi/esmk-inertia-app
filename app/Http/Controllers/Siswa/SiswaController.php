<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SiswaController extends Controller
{
    public function index()
    {
        $title = 'Dashboard Siswa';
        return Inertia::render('Siswa/DashboardSiswa', [
            'title' => $title
        ]);
    }
}
