<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
    id="sidenavAccordion">
    <button class="btn btn-icon btn-transparent-dark order-lg-0 me-2 ms-lg-2 me-lg-0 order-1" id="sidebarToggle">
        <i data-feather="menu"></i>
    </button>
    <ul class="navbar-nav align-items-center ms-auto">
        <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
            <a href="javascript:void(0);" class="btn btn-icon btn-transparent-dark dropdown-toggle"
                data-bs-toggle="dropdown" id="navbarDropdownUserImage">Hello</a>
            <div class="dropdown-menu dropdown-menu-end animated--fade-in-up border-0 shadow">
                <h6 class="dropdown-header d-flex align-items-center">
                    <img src="" alt="" srcset="">
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name">Hello</div>
                        <div class="dropdown-user-details-email">Email</div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a href="#" id="setting-page" class="dropdown-item">
                    <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                    Settings
                </a>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        <div class="dropdown-item-icon">
                            <i data-feather="log-out"></i>
                            Logout
                        </div>
                    </button>
                </form>
            </div>
        </li>
    </ul>
</nav>
