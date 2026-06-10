<?php

namespace App\Http\Controllers;

use App\Models\PendaftarMitra;
use Illuminate\Http\Request;

class PendaftarMitraController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'nomor_whatsapp' => ['required', 'string', 'max:30'],
            'status_lokasi' => ['required', 'in:sudah,belum'],
            'kota' => ['required', 'string', 'max:255'],
            'pulau' => ['required', 'in:Jawa,Luar Pulau Jawa'],
            'source' => ['required', 'array', 'min:1'],
            'source.*' => ['string'],
            'agreement' => ['accepted'],
        ]);

        $data['status'] = 'baru';
        $data['agreement'] = true;

        PendaftarMitra::create($data);

        return back()->with('success', 'Pendaftaran berhasil dikirim.');
    }
}
