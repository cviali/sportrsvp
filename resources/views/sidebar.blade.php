<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 d-flex flex-column">
    <!-- Brand Logo -->
    <a href="{{ route('homepage') }}" class="brand-link">
        <img src="{{ asset('bower_components/admin-lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Velocity Arena</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar flex-grow-1 d-flex flex-column justify-content-between pb-3">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ $page_title == 'Home' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('reservation-list') }}" class="nav-link {{ $page_title == 'Reservations' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Reservations
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('court-list') }}" class="nav-link {{ $page_title == 'Courts' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-map"></i>
                        <p>
                            Courts
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <div>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <div class="img-circle elevation-2 d-flex justify-content-center align-items-center" style="width: 33px; height: 33px;">
                        <i class="nav-icon fas fa-user-alt text-white"></i>
                    </div>
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                </div>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item align-item-end">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="nav-link text-danger">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
