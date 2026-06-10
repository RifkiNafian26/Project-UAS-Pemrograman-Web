<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendaftarMitra;
use Illuminate\Http\Request;

class PendaftarMitraController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->only('status');

        $daftarPendaftar = PendaftarMitra::query()
            ->when($filter['status'] ?? null, fn ($query, $status) => $query->where('status', $status))
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.pendaftar_mitra.index', [
            'daftarPendaftar' => $daftarPendaftar,
            'daftarStatus' => PendaftarMitra::daftarStatus(),
            'filter' => $filter,
        ]);
    }

    public function show(PendaftarMitra $pendaftarMitra)
    {
        return view('admin.pendaftar_mitra.show', [
            'pendaftar' => $pendaftarMitra,
            'daftarStatus' => PendaftarMitra::daftarStatus(),
        ]);
    }

    public function ubahStatus(Request $request, PendaftarMitra $pendaftarMitra)
    {
        $data = $request->validate([
            'status' => ['required', 'in:baru,diproses,diterima'],
        ]);

        $pendaftarMitra->update($data);

        return back()->with('sukses', 'Status pendaftar berhasil diperbarui.');
    }

    public function destroy(PendaftarMitra $pendaftarMitra)
    {
        $pendaftarMitra->delete();

        return redirect()
            ->route('admin.pendaftar-mitra.index')
            ->with('sukses', 'Data pendaftar berhasil dihapus.');
    }
}
