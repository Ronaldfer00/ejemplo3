<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB rrr <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>INICIO</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Modulos
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa-solid fa-list"></i>
            <span>Ventas</span> 
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"></h6>
                <a class="collapse-item" href="{{route('ventas-nueva')}}">Vender Producto</a>
                <a class="collapse-item" href="{{route('ventas-detalle')}}">Consultar Ventas</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('ventas-categoria')}}">
            <i class="fa-solid fa-layer-group"></i>
            <span>Categorias</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('ventas-producto')}}">
            <i class="fa-brands fa-product-hunt"></i>
            <span>Producto</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('ventas-clientes')}}">
            <i class="fa-brands fa-intercom"></i>
            <span>Cliente</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('usuarios')}}">
            <i class="fa-solid fa-user"></i>
            <span>Usuarios</span></a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->


    <!-- Sidebar Message -->
  
</ul>