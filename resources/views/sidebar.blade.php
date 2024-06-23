 <!-- Sidebar -->
 <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-success d-flex sticky-top">
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
                <a href="{{ route('year') }}" class="nav-link px-sm-0 px-2">
                    <i class="bi bi-calendar2-week"></i><span class="ms-1 d-none d-sm-inline">Movimiento por año</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('years') }}" class="nav-link px-sm-0 px-2">
                    <i class="bi bi-calendar2-week"></i><span class="ms-1 d-none d-sm-inline">Movimiento - varios años</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link px-sm-0 px-2">
                <i class="bi bi-suitcase-lg-fill"></i><span class="ms-1 d-none d-sm-inline">Registro de movimientos</span>
                </a>
            </li>
        </ul>
    </div>
</div>