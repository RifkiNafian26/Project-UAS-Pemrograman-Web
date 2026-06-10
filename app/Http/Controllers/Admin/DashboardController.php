<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendaftarMitra;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'ringkasan' => [
                'total_pendaftar' => PendaftarMitra::count(),
                'total_baru' => PendaftarMitra::where('status', 'baru')->count(),
                'total_diproses' => PendaftarMitra::where('status', 'diproses')->count(),
                'total_diterima' => PendaftarMitra::where('status', 'diterima')->count(),
            ],
            'pendaftarTerbaru' => PendaftarMitra::latest()->take(6)->get(),
            'daftarStatus' => PendaftarMitra::daftarStatus(),
        ]);
    }
}
