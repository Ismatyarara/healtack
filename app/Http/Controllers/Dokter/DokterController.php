<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function dashboard()
    {
        return view('dokter.dashboard');
    }

    public function konsultasi()
    {
        return view('dokter.konsultasi');
    }
}
