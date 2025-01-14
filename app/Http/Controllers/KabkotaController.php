<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kabkota;

class KabkotaController extends Controller
{
    public function index()
    {
        $kabkotas = Kabkota::all();
        return view('kabkotas', compact('kabkotas'));
    }

    public function data()
    {
        $kabkotas = Kabkota::all();
        return view('data_kabkota', compact('kabkotas'));
    }
    public function tematik()
    {
        $kabkotas = Kabkota::all();
        return view('tematik_kabkota', compact('kabkotas'));
    }
}
