<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Hanaang PartnerHub') }} - Admin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/admin.css', 'resources/js/admin.js'])
    </head>
    <body class="admin-body antialiased">
        <div x-data="{ sidebarOpen: false }" class="admin-shell">
            @include('layouts.admin-navigation')

            <div class="admin-main">
                @isset($header)
                    <header class="admin-page-header">
                        {{ $header }}
                    </header>
                @endisset

                <main class="admin-content">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
