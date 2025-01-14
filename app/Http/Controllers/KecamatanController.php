<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;

class KecamatanController extends Controller
{
    public function index()
    {
        $kecamatans = Kecamatan::all();
        return view('Kecamatan', compact('kecamatans'));
    }
    public function data()
    {
        $kecamatans = Kecamatan::all();
        return view('data_kecamatan', compact('kecamatans'));
    }
}
