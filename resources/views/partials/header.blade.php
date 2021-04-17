<nav class="navbar navbar-light" style="background-color: #bbe3ff; justify-content: center;">
    <a class="navbar-brand"; style="font-size: 50px"; href="/">Laravel CRUD Project Manager</a>
    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> --}}
    <br>
</nav>
<div class="" style="background-color: #bbe3ff; justify-content: center;">
    <a class="btn btn-sm btn-outline-secondary {{ Request::routeIs('employees.index') ? 'active' : '' }}"
        href="{{ route('employees.index') }}">Darbuotojai</a>
    <a class="btn btn-sm btn-outline-secondary {{ Request::routeIs('projects.index') ? 'active' : '' }}"
        href=" {{ route('projects.index') }}">Projektai</a>
</div>
