@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Technology</h1>

    <form action="{{ route('admin.technologies.update', $technology->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Technology Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $technology->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
