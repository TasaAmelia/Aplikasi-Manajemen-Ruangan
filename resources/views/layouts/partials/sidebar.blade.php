<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">LP3I</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="#">Peminjaman</a></li>
                  <li><a class="nav-link" href="#">Laporan</a></li>
                </ul>
            </li>
            <li class="menu-header">Master Data</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Data</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="layout-default.html">Data Gedung</a></li>
                    <li><a class="nav-link" href="layout-transparent.html">Data Jenis Ruangan</a></li>
                    <li><a class="nav-link" href="layout-top-navigation.html">Data Ruangan</a></li>
                </ul>
            </li>
            <li>
                <a href="/" class="nav-link{{ ($title === "Data Admin") ? 'active' : '' }}"><i class="far fa-user"></i> <span>Data
                    Admin</span></a>
            </li>

        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
