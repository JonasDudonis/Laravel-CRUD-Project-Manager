@extends('layouts.master')
@section('content')
    <h2>Darbuotojai</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Darbuotojas</th>
                <th scope="col">Projektas</th>
                <th scope="col">Veiksmai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <th scope="row">{{ $employee['id'] }}</th>
                    <td>
                        {{ $employee['employee_name'] }}
                         {{ $employee['employee_surname'] }}
                    </td>
                    <td>
                        {{ $employee->project['project_name'] }}
                    </td>
                    <td>
                        <div class="d-flex">
                            <form action="{{ route('employees.show', $employee['id']) }}" method="GET">
                                <input class="" type="submit" value="UPDATE">
                            </form>
                            <form action="{{ route('employees.destroy', $employee['id']) }}" method="POST">
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

    <form method="POST" action="/employees">
        @csrf
        <label for="employee_name">Vardas:</label><br>
        <input type="text" id="employee_name" name="employee_name"><br><br>
        @error('employee_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="employee_surname">Pavardė:</label><br>
        <input type="text" id="employee_surname" name="employee_surname"><br><br>
        @error('employee_surname')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="project_id">Projektas:</label><br>
        <select name="project_id" id="project_id">
            <option value="" selected>Pasirinkti</option>
            @foreach (App\Models\Project::all() as $project)
                <option value="{{ $project['id'] }}">{{ $project['project_name'] }}</option>
            @endforeach
        </select><br><br>
        @error('project_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input class="btn btn-primary" type="submit" value="Pridėti">
    </form>

@endsection
