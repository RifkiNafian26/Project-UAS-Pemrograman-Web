<x-admin-layout>
    <x-slot name="header">
        <div class="admin-header-row">
            <div class="admin-header-copy">
                <p class="admin-kicker">Kemitraan</p>
                <h1 class="admin-page-title">Pendaftar Mitra</h1>
                <p class="admin-page-subtitle">Tinjau formulir masuk, hubungi calon mitra, dan perbarui progresnya.</p>
            </div>
        </div>
    </x-slot>

    <div class="admin-content-container">
        @if (session('sukses'))
            <div class="admin-alert admin-alert-success">{{ session('sukses') }}</div>
        @endif

        <form method="GET" action="{{ route('admin.pendaftar-mitra.index') }}" class="admin-filter">
            <div class="admin-field">
                <label class="admin-label" for="status">Status pendaftar</label>
                <select id="status" name="status" class="admin-select">
                    <option value="">Semua status</option>
                    @foreach ($daftarStatus as $nilai => $label)
                        <option value="{{ $nilai }}" @selected(($filter['status'] ?? '') === $nilai)>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="admin-actions">
                <button type="submit" class="admin-btn admin-btn-primary">
                    <i data-lucide="filter"></i>
                    Terapkan
                </button>
                <a href="{{ route('admin.pendaftar-mitra.index') }}" class="admin-btn admin-btn-secondary">
                    <i data-lucide="rotate-ccw"></i>
                    Reset
                </a>
            </div>
        </form>

        <section class="admin-card admin-table-card">
            <div class="admin-card-header">
                <div>
                    <h2 class="admin-card-title">Data Calon Mitra</h2>
                    <p class="admin-card-subtitle">{{ $daftarPendaftar->total() }} data ditemukan.</p>
                </div>
            </div>
            <div class="admin-table-scroll">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Calon Mitra</th>
                            <th>Wilayah</th>
                            <th>Pulau</th>
                            <th>Tanggal Masuk</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($daftarPendaftar as $pendaftar)
                            @php
                                $statusClass = match ($pendaftar->status) {
                                    'baru' => 'admin-badge-new',
                                    'diproses' => 'admin-badge-process',
                                    'diterima' => 'admin-badge-success',
                                    default => 'admin-badge-danger',
                                };
                            @endphp
                            <tr>
                                <td>
                                    <span class="admin-table-primary">{{ $pendaftar->nama_lengkap }}</span>
                                    <span class="admin-table-secondary">{{ $pendaftar->nomor_whatsapp }}</span>
                                </td>
                                <td>{{ $pendaftar->kota }}</td>
                                <td>{{ $pendaftar->pulau }}</td>
                                <td>{{ $pendaftar->created_at->format('d M Y, H:i') }}</td>
                                <td><span class="admin-badge {{ $statusClass }}">{{ $daftarStatus[$pendaftar->status] ?? $pendaftar->status }}</span></td>
                                <td>
                                    <div class="admin-actions">
                                        <a class="admin-btn admin-btn-secondary admin-btn-icon" href="{{ route('admin.pendaftar-mitra.show', $pendaftar) }}" title="Lihat detail">
                                            <i data-lucide="eye"></i>
                                        </a>
                                        <form method="POST" action="{{ route('admin.pendaftar-mitra.destroy', $pendaftar) }}" onsubmit="return confirm('Hapus data pendaftar ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="admin-btn admin-btn-danger admin-btn-icon" title="Hapus">
                                                <i data-lucide="trash-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">
                                    <div class="admin-empty">
                                        <strong>Belum ada data yang sesuai</strong>
                                        <p>Coba ubah filter atau tunggu formulir pendaftaran baru.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="admin-table-footer">{{ $daftarPendaftar->links() }}</div>
        </section>
    </div>
</x-admin-layout>
