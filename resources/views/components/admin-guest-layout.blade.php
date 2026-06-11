<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Admin - {{ config('app.name', 'Hanaang PartnerHub') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/admin.css', 'resources/js/admin.js'])
    </head>
    <body class="admin-login-body antialiased">
        <div class="admin-login-shell">
            <section class="admin-login-hero" aria-label="Hanaang Admin">
                <a href="{{ route('login') }}" class="admin-login-brand">
                    <img src="{{ asset('images/logohanaanghitam.png') }}" alt="Teh Tarik Hanaang">
                    <span>PartnerHub Admin</span>
                </a>

                <div class="admin-login-hero-copy">
                    <p>Area Admin</p>
                    <h1>Kelola pendaftar mitra dengan lebih rapi.</h1>
                    <span>Data formulir, status tindak lanjut, dan arsip pendaftar berada dalam satu dashboard.</span>
                </div>

                <div class="admin-login-points">
                    <span><i data-lucide="users"></i>Data calon mitra</span>
                    <span><i data-lucide="save"></i>Status proses</span>
                    <span><i data-lucide="log-out"></i>Akses aman</span>
                </div>
            </section>

            <div class="admin-login-panel">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
