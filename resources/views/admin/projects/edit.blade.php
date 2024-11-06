<h1>Modifica Progetto</h1>

<form method="POST" action="{{ route('admin.projects.update', $project->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title" value="{{ $project->title }}" required>
    </div>

    <div>
        <label for="description">Descrizione</label>
        <textarea name="description" id="description">{{ $project->description }}</textarea>
    </div>

    <button type="submit">Aggiorna</button>
</form>
