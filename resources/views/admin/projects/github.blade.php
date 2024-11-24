@extends('layouts.app')

@section('content')
<div class="container">
    <h1>I Miei Progetti GitHub</h1>
    <ul>
        @forelse ($repositories as $repo)
            <li>
                <h2>{{ $repo['name'] }}</h2>
                <p>{{ $repo['description'] ?? 'Nessuna descrizione disponibile' }}</p>
                <a href="{{ $repo['html_url'] }}" target="_blank">Visita su GitHub</a>
            </li>
        @empty
            <p>Non sono stati trovati progetti su GitHub.</p>
        @endforelse
    </ul>
</div>
@endsection
