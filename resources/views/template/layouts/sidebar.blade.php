<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a style="color: #4070f4;"><b>DATA UNDANGAN</b></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#" style="color: #4070f4;"><b>DU</b></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">DASHBOARD</li>
            <li class="nav-item {{ $sidebar == 'dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">Master</li>
            <li class="nav-item {{ $sidebar == 'users' ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/users') }}">
                    <i class="fas fa-users"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="menu-header">Data</li>
            <li class="nav-item {{ $sidebar == 'dataundangan' ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/undangan') }}">
                    <i class="fas fa-folder-open"></i>
                    <span>Undangan</span>
                </a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <div class="mt-2 mb-4 p-3 hide-sidebar-mini">
            <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>