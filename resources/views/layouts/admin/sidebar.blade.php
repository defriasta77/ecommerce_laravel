<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <!-- Nama Brand Sidebar -->
        <div class="sidebar-brand">
            <a href="#">Teknik Informatika | RPL</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">RPL</a>
        </div>

        <!-- Menu Sidebar -->
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>

            <!-- Link Dashboard -->
            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Link Produk -->
            <li class="{{ Request::is('product*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.product') }}">
                    <i class="fas fa-box"></i>
                    <span>Produk</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
