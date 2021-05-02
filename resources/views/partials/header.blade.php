<nav class="navbar navbar-light" style="background-color: #000000; justify-content: center;">
    <a class="navbar-brand"; style="font-size: 50px; color: #ffffff;"; href="/">Laravel CRUD Project Manager</a>
</nav>
<div class="" style="background-color: #ebe8e8; color:#ffffff; justify-content: center;">
    <a class="btn btn-sm btn-outline-secondary {{ Request::routeIs('employees.index') ? 'active' : '' }}"
        href="{{ route('employees.index') }}">Darbuotojai</a>
    <a class="btn btn-sm btn-outline-secondary {{ Request::routeIs('projects.index') ? 'active' : '' }}"
        href=" {{ route('projects.index') }}">Projektai</a>
</div>
