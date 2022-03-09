<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashController extends Controller
{
    public function index()
    {
        $data = Auth::user();
        return Inertia::render('Dashboard/Index', $data);
    }
}
