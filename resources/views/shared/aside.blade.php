<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('home') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Ventas</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('new-sale') }}">
                        <i class="bi bi-circle"></i><span>Vender Producto</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('detail-sale') }}">
                        <i class="bi bi-circle"></i><span>Consultar Ventas</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('categories') }}">
                <i class="bi bi-card-list"></i>
                <span>Categorias</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('products') }}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Productos</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('clients') }}">
                <i class="bi bi-dash-circle"></i>
                <span>Clientes</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('users') }}">
                <i class="bi bi-people"></i>
                <span>Usuarios</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside>
