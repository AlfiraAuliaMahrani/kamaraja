<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $members = User::latest()->take(10)->get();

        return view('dashboard.index', compact('members'));
    }
}
