<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class HomeController extends Controller
{
    public function index()
    {
        $kamars = Kamar::all();
        return view('welcome', compact('kamars'));
    }
}
