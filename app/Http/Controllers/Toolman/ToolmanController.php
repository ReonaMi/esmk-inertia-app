<?php

namespace App\Http\Controllers\Toolman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ToolmanController extends Controller
{
    public function index()
    {
        $title = 'Dashboard Toolman';
        return Inertia::render('Toolman/DashboardToolman', [
            'title' => $title
        ]);
    }
}
