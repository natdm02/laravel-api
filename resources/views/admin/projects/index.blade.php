@extends('layouts.app')

@section('title', 'Progetti')

@section('content')

<div class="container">
    <div class="text-center">
        <h1>Progetti</h1>
    </div>

    <div class="row">
        @forelse($projects as $project)

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text">{{ $project->description }}</p>
                    </div>
                </div>
            </div>

        @empty
        @endforelse
    </div>
</div>

