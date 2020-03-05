<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{{ route('productos.index') }}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('facturas*') ? 'active' : '' }}">
    <a href="{{ route('facturas.index') }}"><i class="fa fa-edit"></i><span>Facturas</span></a>
</li>

<li class="{{ Request::is('registros*') ? 'active' : '' }}">
    <a href="{{ route('registros.index') }}"><i class="fa fa-edit"></i><span>Registros</span></a>
</li>

