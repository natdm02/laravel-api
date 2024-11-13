@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Technologies</h1>
    <div class="row">
        <div class="col-12 text-right mb-3">
            <a href="{{ route('admin.technologies.create') }}" class="btn btn-primary">Create New Technology</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($technologies as $technology)
                <tr>
                    <td>{{ $technology->name }}</td>
                    <td>
                        <a href="{{ route('admin.technologies.edit', $technology->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.technologies.destroy', $technology->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
