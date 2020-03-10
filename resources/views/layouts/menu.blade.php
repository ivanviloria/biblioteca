






<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('autores*') ? 'active' : '' }}">
    <a href="{{ route('autores.index') }}"><i class="fa fa-edit"></i><span>Autores</span></a>
</li>

<li class="{{ Request::is('libros*') ? 'active' : '' }}">
    <a href="{{ route('libros.index') }}"><i class="fa fa-edit"></i><span>Libros</span></a>
</li>

<li class="{{ Request::is('prestamos*') ? 'active' : '' }}">
    <a href="{{ route('prestamos.index') }}"><i class="fa fa-edit"></i><span>Prestamos</span></a>
</li>

