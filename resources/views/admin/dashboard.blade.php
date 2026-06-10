<x-admin-layout>
    <x-slot name="header">
        <div class="admin-header-row">
            <div class="admin-header-copy">
                <p class="admin-kicker">Hanaang Admin</p>
                <h1 class="admin-page-title">Dashboard</h1>
                <p class="admin-page-subtitle">Pantau data pendaftar kemitraan Teh Hanaang.</p>
            </div>
        </div>
    </x-slot>

    <div class="admin-content-container">
        <div class="admin-grid admin-stat-grid">
            <article class="admin-stat-card">
                <div class="admin-stat-top">
                    <p class="admin-stat-label">Total Pendaftar</p>
                    <span class="admin-stat-icon"><i data-lucide="users"></i></span>
                </div>
                <p class="admin-stat-number">{{ $ringkasan['total_pendaftar'] }}</p>
                <p class="admin-stat-note">Semua data formulir masuk</p>
            </article>

            <article class="admin-stat-card">
                <div class="admin-stat-top">
                    <p class="admin-stat-label">Baru</p>
                    <span class="admin-stat-icon"><i data-lucide="users"></i></span>
                </div>
                <p class="admin-stat-number">{{ $ringkasan['total_baru'] }}</p>
                <p class="admin-stat-note">Belum diproses admin</p>
            </article>

            <article class="admin-stat-card">
                <div class="admin-stat-top">
                    <p class="admin-stat-label">Diproses</p>
                    <span class="admin-stat-icon"><i data-lucide="users"></i></span>
                </div>
                <p class="admin-stat-number">{{ $ringkasan['total_diproses'] }}</p>
                <p class="admin-stat-note">Sedang ditindaklanjuti</p>
            </article>

            <article class="admin-stat-card">
                <div class="admin-stat-top">
                    <p class="admin-stat-label">Diterima</p>
                    <span class="admin-stat-icon"><i data-lucide="users"></i></span>
                </div>
                <p class="admin-stat-number">{{ $ringkasan['total_diterima'] }}</p>
                <p class="admin-stat-note">Sudah diterima menjadi mitra</p>
            </article>
        </div>

        <section class="admin-card admin-table-card" style="margin-top: 18px;">
            <div class="admin-card-header">
                <div>
                    <h2 class="admin-card-title">Pendaftar Terbaru</h2>
                    <p class="admin-card-subtitle">Enam data terbaru dari formulir daftar mitra.</p>
                </div>
                <a href="{{ route('admin.pendaftar-mitra.index') }}" class="admin-btn admin-btn-secondary">Lihat Semua</a>
            </div>

            <div class="admin-table-scroll">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Calon Mitra</th>
                            <th>Kota</th>
                            <th>Pulau</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pendaftarTerbaru as $pendaftar)
                            @php
                                $statusClass = match ($pendaftar->status) {
                                    'baru' => 'admin-badge-new',
                                    'diproses' => 'admin-badge-process',
                                    'diterima' => 'admin-badge-success',
                                    default => 'admin-badge-new',
                                };
                            @endphp
                            <tr>
                                <td>
                                    <span class="admin-table-primary">{{ $pendaftar->nama_lengkap }}</span>
                                    <span class="admin-table-secondary">{{ $pendaftar->nomor_whatsapp }}</span>
                                </td>
                                <td>{{ $pendaftar->kota }}</td>
                                <td>{{ $pendaftar->pulau }}</td>
                                <td><span class="admin-badge {{ $statusClass }}">{{ $daftarStatus[$pendaftar->status] ?? $pendaftar->status }}</span></td>
                                <td>
                                    <a href="{{ route('admin.pendaftar-mitra.show', $pendaftar) }}" class="admin-btn admin-btn-secondary admin-btn-icon" title="Lihat detail">
                                        <i data-lucide="eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <div class="admin-empty">
                                        <strong>Belum ada pendaftar</strong>
                                        <p>Data calon mitra akan muncul setelah formulir dikirim.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</x-admin-layout>
