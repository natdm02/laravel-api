@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>{{ $project->name }}</h1>
        <p> {{ $project->type->name ?? }}</p>
        <p> {{ $project->description }}</p>
    </div>

@endsection
