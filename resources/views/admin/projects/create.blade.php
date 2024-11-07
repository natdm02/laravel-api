<h1>Crea Nuovo Progetto</h1>

<form method="POST" action="{{ route('admin.projects.store') }}">
    @csrf
    <div>
        <label for="name">Titolo</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="description">Descrizione</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <div class="form-group">

        <label for="type_id">Tipo di Progetto</label>
        <select name="type_id" id="type_id" class="form-control">
            @foreach ($types as $type)
                <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>
                    {{ $type->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit">Salva</button>
</form>
