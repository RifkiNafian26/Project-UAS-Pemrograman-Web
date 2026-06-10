<div
    x-show="sidebarOpen"
    x-transition.opacity
    class="admin-sidebar-overlay"
    @click="sidebarOpen = false"
    aria-hidden="true"
></div>

<aside class="admin-sidebar" :class="{ 'is-open': sidebarOpen }">
    <div class="admin-brand">
        <a href="{{ route('admin.dashboard') }}" class="admin-brand-link">
            <span class="admin-brand-mark">
                <img src="{{ asset('images/logokecilhitam.png') }}" alt="">
            </span>
            <span>
                <strong>Teh Tarik Hanaang</strong>
                <small>PartnerHub Admin</small>
            </span>
        </a>
        <button type="button" class="admin-sidebar-close" @click="sidebarOpen = false" aria-label="Tutup menu">
            <i data-lucide="x"></i>
        </button>
    </div>

    <nav class="admin-nav" aria-label="Navigasi admin">
        <p class="admin-nav-label">Utama</p>
        <a href="{{ route('admin.dashboard') }}" class="admin-nav-link {{ request()->routeIs('admin.dashboard') ? 'is-active' : '' }}">
            <i data-lucide="layout-dashboard"></i>
            <span>Dashboard</span>
        </a>
        <a href="{{ route('admin.pendaftar-mitra.index') }}" class="admin-nav-link {{ request()->routeIs('admin.pendaftar-mitra.*') ? 'is-active' : '' }}">
            <i data-lucide="users"></i>
            <span>Pendaftar Mitra</span>
        </a>
    </nav>

    <div class="admin-sidebar-footer">
        <div class="admin-user">
            <span class="admin-user-avatar">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
            <span class="admin-user-copy">
                <strong>{{ Auth::user()->name }}</strong>
                <small>{{ Auth::user()->email }}</small>
            </span>
        </div>
        <div class="admin-sidebar-actions">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="admin-icon-action admin-icon-danger" title="Keluar">
                    <i data-lucide="log-out"></i>
                </button>
            </form>
        </div>
    </div>
</aside>

<div class="admin-mobile-bar">
    <button type="button" class="admin-menu-button" @click="sidebarOpen = true" aria-label="Buka menu">
        <i data-lucide="menu"></i>
    </button>
    <a href="{{ route('admin.dashboard') }}" class="admin-mobile-brand">
        <img src="{{ asset('images/logokecilhitam.png') }}" alt="">
        <span>Hanaang Admin</span>
    </a>
    <span class="admin-menu-button" aria-hidden="true"></span>
</div>
