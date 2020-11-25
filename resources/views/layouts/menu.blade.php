<li>
    <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home </a>
</li>

<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{{ url('home') }}"><i class="fa fa-edit"></i><span> Dashboard </span></a>
</li>

<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('articulos*') ? 'active' : '' }}">
    <a href="{{ route('articulos.index') }}"><i class="fa fa-edit"></i><span>Articulos</span></a>
</li>

<li class="{{ Request::is('proveedores*') ? 'active' : '' }}">
    <a href="{{ route('proveedores.index') }}"><i class="fa fa-edit"></i><span>Proveedores</span></a>
</li>

<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{{ route('categorias.index') }}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

<li class="{{ Request::is('ingresos*') ? 'active' : '' }}">
    <a href="{{ route('ingresos.index') }}"><i class="fa fa-edit"></i><span>Ingresos</span></a>
</li>

<li class="{{ Request::is('detallesIngresos*') ? 'active' : '' }}">
    <a href="{{ route('detallesIngresos.index') }}"><i class="fa fa-edit"></i><span>Detalles Ingresos</span></a>
</li>

<li class="{{ Request::is('ventas*') ? 'active' : '' }}">
    <a href="{{ route('ventas.index') }}"><i class="fa fa-edit"></i><span>Ventas</span></a>
</li>

<li class="{{ Request::is('detallesVentas*') ? 'active' : '' }}">
    <a href="{{ route('detallesVentas.index') }}"><i class="fa fa-edit"></i><span>Detalles Ventas</span></a>
</li>