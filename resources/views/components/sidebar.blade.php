<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Medicyo Weitas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('profile.edit') }}" class="d-block">
                    @auth
                        {{ strtoupper(Auth::user()->name) }}
                        <br><span class='text-primary'>Role: {{ Auth::user()->role }}</span>
                    @else
                        User
                    @endauth
                </a>
            </div>
        </div>
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                @auth
                      <li class="nav-item">
                            <a href="{{ route('faskes.index') }}" class="nav-link">
                                <i class="fas fa-hospital-alt nav-icon"></i>
                                <p>Faskes</p>
                            </a>
                        </li>
                    @if(Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a href="{{ route('jenis_faskes.index') }}" class="nav-link">
                                <i class="fas fa-clinic-medical nav-icon"></i>
                                <p>Jenis Faskes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kategori.index') }}" class="nav-link">
                                <i class="fas fa-tags nav-icon"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('provinsi.index') }}" class="nav-link">
                                <i class="fas fa-map-marked-alt nav-icon"></i>
                                <p>Provinsi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kabkota.index') }}" class="nav-link">
                                <i class="fas fa-city nav-icon"></i>
                                <p>Kab/Kota</p>
                            </a>
                        </li>
                    @endif
                @endauth
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>