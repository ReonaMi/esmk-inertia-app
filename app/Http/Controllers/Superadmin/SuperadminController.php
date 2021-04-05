<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SuperadminController extends Controller
{
    public function index()
    {
        $title = 'Dashboard Superadmin';
        return Inertia::render('Superadmin/DashboardSuperadmin', [
            'title' => $title
        ]);
    }
}