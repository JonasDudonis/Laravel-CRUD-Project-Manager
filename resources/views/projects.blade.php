@extends('layouts.master')
@section('content')
    <h2>Projektai</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Projektas</th>
                <th scope="col">Projekto aprašymas</th>
                <th scope="col">Priskirtas darbuotojas</th>
                <th scope="col">Veiksmai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project['id'] }}</th>
                    <td>
                        {{ $project['project_name'] }}
                    </td>
                    <td>
                        {{ $project['project_info'] }}
                    </td>
                    <td>
                        @foreach ($project->employees as $employee)
                            {{ $employee['employee_name'] }}{{ $loop->last ? '' : ', ' }}
                        @endforeach
                    </td>
                    <td>
                        <div class="d-flex">
                            <form action="{{ route('projects.show', $project['id']) }}" method="GET">
                                <input class="" type="submit" value="UPDATE">
                            </form>
                            <form action="{{ route('projects.destroy', $project['id']) }}" method="POST">
                                @method('DELETE') @csrf
                                <input class="" type="submit" value="DELETE">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if (session('status_success'))
        <p style="color: green"><b>{{ session('status_success') }}</b></p>
    @else
        <p style="color: red"><b>{{ session('status_error') }}</b></p>
    @endif

    <form method="POST" action="/projects">
        @csrf
        <label for="project_name">Projektas:</label><br>
        <input type="text" id="project_name" name="project_name"><br><br>
        @error('project_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="project_info">Projekto aprašymas:</label><br>
        <input type="text" id="project_info" name="project_info"><br><br>
        @error('project_info')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input class="btn btn-primary" type="submit" value="Pridėti">
    </form>

@endsection
