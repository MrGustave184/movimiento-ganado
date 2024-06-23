 <!-- Sidebar -->
 <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top">
    <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
        <a href="/" class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5">S<span class="d-none d-sm-inline">idebar</span></span>
        </a>
        <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link px-sm-0 px-2">
                    <i class="fs-5 bi-house"></i><span class="ms-1 d-none d-sm-inline">Inicio</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link px-sm-0 px-2">
                    <i class="bi bi-journal-album"></i><span class="ms-1 d-none d-sm-inline">Acerca de nosotros</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('year') }}" class="nav-link px-sm-0 px-2">
                    <i class="bi bi-journal-album"></i><span class="ms-1 d-none d-sm-inline">movimiento</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('years') }}" class="nav-link px-sm-0 px-2">
                    <i class="bi bi-journal-album"></i><span class="ms-1 d-none d-sm-inline">movimiento periodo</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link px-sm-0 px-2">
                    <i class="bi bi-journal-album"></i><span class="ms-1 d-none d-sm-inline">Registro de movimientos</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link dropdown-toggle px-sm-0 px-2" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-houses-fill"></i><span class="ms-1 d-none d-sm-inline">Catastro</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                    <li><a class="dropdown-item" href="{{ route('property.register') }}">Catastro inmobiliario</a></li>
                    <li><a class="dropdown-item" href="{{ route('property.search') }}">Buscar</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('gravamenes.search') }}" class="nav-link px-sm-0 px-2">
                    <i class="bi bi-bank"></i><span class="ms-1 d-none d-sm-inline">Gravámenes</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('ejidos') }}" class="nav-link px-sm-0 px-2">
                    <i class="bi bi-image-fill"></i><span class="ms-1 d-none d-sm-inline">Ejidos Municipales</span>
                </a>
            </li>
        </ul>
    </div>
</div>