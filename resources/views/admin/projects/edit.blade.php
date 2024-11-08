<h1>Modifica Progetto</h1>

<form method="POST" action="{{ route('admin.projects.update', $project->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Titolo</label>
        <input type="text" name="title" id="name" value="{{ $project->title }}" required>
    </div>

    <div>
        <label for="description">Descrizione</label>
        <textarea name="description" id="description">{{ $project->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="type_id">Tipo di Progetto</label>
        <select name="type_id" id="type_id" class="form-control">

            @foreach ($types as $type)

                <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}>
                    {{ $type->name }}
                </option>

            @endforeach
        </select>
    </div>

    <button type="submit">Aggiorna</button>
</form>
