<x-admin-layout>
    <x-slot name="header">
        <div class="admin-header-row">
            <div class="admin-header-copy">
                <p class="admin-kicker">Detail Calon Mitra</p>
                <h1 class="admin-page-title">{{ $pendaftar->nama_lengkap }}</h1>
                <p class="admin-page-subtitle">Form diterima pada {{ $pendaftar->created_at->format('d M Y, H:i') }}.</p>
            </div>
            <a href="{{ route('admin.pendaftar-mitra.index') }}" class="admin-btn admin-btn-secondary">
                <i data-lucide="arrow-left"></i>
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="admin-content-container admin-content-narrow">
        @if (session('sukses'))
            <div class="admin-alert admin-alert-success">{{ session('sukses') }}</div>
        @endif

        <div class="admin-grid">
            <section class="admin-card">
                <div class="admin-card-header">
                    <div>
                        <h2 class="admin-card-title">Informasi Pendaftar</h2>
                        <p class="admin-card-subtitle">Data yang dikirim melalui formulir kemitraan.</p>
                    </div>
                    @php
                        $statusClass = match ($pendaftar->status) {
                            'baru' => 'admin-badge-new',
                            'diproses' => 'admin-badge-process',
                            'diterima' => 'admin-badge-success',
                            default => 'admin-badge-danger',
                        };
                    @endphp
                    <span class="admin-badge {{ $statusClass }}">{{ $daftarStatus[$pendaftar->status] ?? $pendaftar->status }}</span>
                </div>
                <div class="admin-card-body">
                    <dl class="admin-detail-grid">
                        <div class="admin-detail-item">
                            <dt>Nama Lengkap</dt>
                            <dd>{{ $pendaftar->nama_lengkap }}</dd>
                        </div>
                        <div class="admin-detail-item">
                            <dt>Nomor WhatsApp</dt>
                            <dd>{{ $pendaftar->nomor_whatsapp }}</dd>
                        </div>
                        <div class="admin-detail-item">
                            <dt>Kota / Kabupaten</dt>
                            <dd>{{ $pendaftar->kota }}</dd>
                        </div>
                        <div class="admin-detail-item">
                            <dt>Status Lokasi</dt>
                            <dd>{{ ucfirst($pendaftar->status_lokasi) }}</dd>
                        </div>
                        <div class="admin-detail-item">
                            <dt>Pulau</dt>
                            <dd>{{ $pendaftar->pulau }}</dd>
                        </div>
                        <div class="admin-detail-item admin-detail-full">
                            <dt>Sumber Informasi</dt>
                            <dd>{{ collect($pendaftar->source ?? [])->map(fn ($source) => ucfirst($source))->join(', ') ?: '-' }}</dd>
                        </div>
                    </dl>
                </div>
            </section>

            <section class="admin-card">
                <div class="admin-card-header">
                    <div>
                        <h2 class="admin-card-title">Tindak Lanjut</h2>
                        <p class="admin-card-subtitle">Hubungi calon mitra lalu perbarui status proses.</p>
                    </div>
                </div>
                <div class="admin-card-body">
                    <form method="POST" action="{{ route('admin.pendaftar-mitra.ubah-status', $pendaftar) }}" class="admin-form-grid">
                        @csrf
                        @method('PATCH')
                        <div class="admin-field">
                            <label class="admin-label" for="status">Status kemitraan</label>
                            <select id="status" name="status" class="admin-select">
                                @foreach ($daftarStatus as $nilai => $label)
                                    <option value="{{ $nilai }}" @selected(old('status', $pendaftar->status) === $nilai)>{{ $label }}</option>
                                @endforeach
                            </select>
                            @error('status') <p class="admin-error">{{ $message }}</p> @enderror
                        </div>
                        <div class="admin-field" style="align-self: end;">
                            <button type="submit" class="admin-btn admin-btn-primary">
                                <i data-lucide="save"></i>
                                Simpan Status
                            </button>
                        </div>
                    </form>

                    <div class="admin-form-actions">
                        <a href="https://wa.me/{{ preg_replace('/\D+/', '', preg_replace('/^0/', '62', $pendaftar->nomor_whatsapp)) }}" target="_blank" class="admin-btn admin-btn-secondary">
                            Hubungi via WhatsApp
                        </a>
                        <form method="POST" action="{{ route('admin.pendaftar-mitra.destroy', $pendaftar) }}" onsubmit="return confirm('Hapus data pendaftar ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="admin-btn admin-btn-danger">
                                <i data-lucide="trash-2"></i>
                                Hapus Data
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-admin-layout>
