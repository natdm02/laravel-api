<h1>Modifica Progetto</h1>

<form method="POST" action="{{ route('admin.projects.update', $project->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Titolo</label>
        <input type="text" name="name" id="name" value="{{ old('name', $project->name) }}">
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="description">Descrizione</label>
        <textarea name="description" id="description">{{ old('description', $project->description) }}</textarea>
        @error('description')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="type_id">Tipo di Progetto</label>
        <select name="type_id" id="type_id" class="form-control">
            @foreach ($types as $type)
                <option value="{{ $type->id }}" {{ old('type_id', $project->type_id) == $type->id ? 'selected' : '' }}>
                    {{ $type->name }}
                </option>
            @endforeach
        </select>
        @error('type_id')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="technologies">Tecnologie</label>
        <select name="technologies[]" id="technologies" class="form-control" multiple required>
            @foreach ($technologies as $technology)
                <option value="{{ $technology->id }}"
                    {{ in_array($technology->id, old('technologies', [])) ? 'selected' : '' }}>
                    {{ $technology->name }}
                </option>
            @endforeach
        </select>
        @error('technologies')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>



    <button type="submit">Salva</button>
</form>
