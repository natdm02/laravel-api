@extends('layouts.app')

@section('content')


<div class="container">
    <h1>{{ $project->name }}</h1>
    <p><strong>Tipo:</strong> {{ $project->type ? $project->type->name : 'nessun tipo'  }}</p>
    <p><strong>Descrizione:</strong> {{ $project->description }}</p>
    <p><strong>Data di creazione:</strong> {{ $project->created_at }}</p>
    <p><strong>Ultima modifica:</strong> {{ $project->updated_at }}</p>
    <h3>Tecnologie utilizzate:</h3>

    @if ($project->technologies->isNotEmpty())
        <ul>
            @foreach ($project->technologies as $technology)
                <li>{{ $technology->name }}</li>
            @endforeach
        </ul>
    @else
        <p>Nessuna tecnologia associata a questo progetto.</p>
    @endif

    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Torna alla lista</a>
</div>
@endsection
