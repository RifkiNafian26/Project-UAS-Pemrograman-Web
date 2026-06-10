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
            <a href="{{ route('login') }}" class="admin-login-brand">
                <img src="{{ asset('images/logohanaanghitam.png') }}" alt="Teh Tarik Hanaang">
                <span>PartnerHub Admin</span>
            </a>

            <div class="admin-login-panel">
                {{ $slot }}
            </div>
            <p class="admin-login-footer">Area khusus pengelola Teh Tarik Hanaang.</p>
        </div>
    </body>
</html>
