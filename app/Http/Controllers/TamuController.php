<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index()
    {
        $tamu = session('tamu', []);
        return view('tamu.index', compact('tamu'));
    }

    public function create()
    {
        return view('tamu.create');
    }

    public function store(Request $request)
    {
        $tamu = session('tamu', []);
        
        $tamu[] = [
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ];
        
        session(['tamu' => $tamu]);
        
        return redirect('/tamu');
    }
}