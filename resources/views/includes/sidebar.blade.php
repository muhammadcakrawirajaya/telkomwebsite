<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        {{-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> --}}
        <div class="sidebar-brand-text mx-3">TELESCOUT <h6 class="sub-brand-name">Witel Sidoarjo</h6></div>
        <img class="logo-telkom" src="{{ asset('assets/img/logo_brand.png') }}" alt="...">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        CATEGORY 1
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Menu 1</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="py-2 collapse-inner rounded">
                <h6 class="collapse-header">Sub Menus :</h6>
                <a class="collapse-item" href="buttons.html">Sub Menu 1.1</a>
                <a class="collapse-item" href="cards.html">Sub Menu 1.2</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Menu 2</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="py-2 collapse-inner rounded">
                <h6 class="collapse-header">Sub Menus :</h6>
                <a class="collapse-item" href="utilities-color.html">Sub Menu 2.1</a>
                <a class="collapse-item" href="utilities-border.html">Sub Menu 2.2</a>
                <a class="collapse-item" href="utilities-animation.html">Sub Menu 2.3</a>
                <a class="collapse-item" href="utilities-other.html">Sub Menu 2.4</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        CATEGORY 2
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Menu 3</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="py-2 collapse-inner rounded">
                <h6 class="collapse-header">Sub Menus :</h6>
                <a class="collapse-item" href="{{ route('submenu3_1_1') }}">Sub Menu 3.1.1</a>
                <a class="collapse-item" href="register.html">Sub Menu 3.1.2</a>
                <a class="collapse-item" href="forgot-password.html">Sub Menu 3.1.3</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Sub Menus :</h6>
                <a class="collapse-item" href="404.html">Sub Menu 3.2.1</a>
                <a class="collapse-item" href="blank.html">Sub Menu 3.2.2</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Menu 4</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('manage_user') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="{{ asset('assets/img/indihome_logo.svg.png') }}" alt="...">
        <p class="text-center mb-2"><strong>TELESCOUT</strong> is a Telkom's Evaluation and Surveillance website for Comprehensive Oversight and Utilization Tracking in Witel Sidoarjo
        </p>
        <a class="btn btn-primary btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Learn More</a>
    </div>

</ul>
