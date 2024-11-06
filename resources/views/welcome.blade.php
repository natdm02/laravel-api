@extends('layouts.app')

@section('title', 'Benvenuto')

@section('content')

{{-- @vite('resources/sass/welcome.scss') --}}


<div class="text-center">

    <h1>benvenuto nel tuo portfolio!</h1>

    <a href="{{ route('login') }}" class="btn btn-primary">Accedi</a>

    <a href="{{ route('register') }}" class="btn btn-secondary">Registrati</a>

</div>

@endsection
