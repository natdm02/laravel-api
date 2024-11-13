@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Technology</h1>

    <form action="{{ route('admin.technologies.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Technology Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
