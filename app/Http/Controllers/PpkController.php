<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PpkController extends Controller
{
    public function index()
    {
        return view('ppk.dashboard');
    }
}
