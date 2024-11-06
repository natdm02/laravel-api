@extends('layouts.app')

@section('title', 'Progetti')

@section('content')

    <div class="container">
        <h1 class="text-center">lista progetti</h1>

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Crea Nuovo Progetto</a>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Azioni</th>
            </tr>
        </thead>

        <tbody>

            @foreach($projects as $project)

                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning">Modifica</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>

    </div>

@endsection


