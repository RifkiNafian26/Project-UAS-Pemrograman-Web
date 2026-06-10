<x-admin-guest-layout>
    <div class="admin-login-heading">
        <p>Selamat datang kembali</p>
        <h1>Masuk ke dashboard</h1>
        <span>Kelola pendaftar mitra dan data operasional Hanaang.</span>
    </div>

    @if (session('status'))
        <div class="admin-alert admin-alert-success">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="admin-login-form">
        @csrf

        <div class="admin-field">
            <label class="admin-label" for="email">Email admin</label>
            <input id="email" class="admin-input" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="email@contoh.com">
            @error('email') <p class="admin-error">{{ $message }}</p> @enderror
        </div>

        <div class="admin-field">
            <label class="admin-label" for="password">Password</label>
            <input id="password" class="admin-input" type="password" name="password" required autocomplete="current-password" placeholder="Masukkan password">
            @error('password') <p class="admin-error">{{ $message }}</p> @enderror
        </div>

        <label class="admin-check">
            <input id="remember_me" type="checkbox" name="remember">
            <span>Ingat saya di perangkat ini</span>
        </label>

        <button type="submit" class="admin-btn admin-btn-primary admin-login-submit">
            Masuk ke Dashboard
        </button>
    </form>
</x-admin-guest-layout>
