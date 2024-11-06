<h1>Crea Nuovo Progetto</h1>

<form method="POST" action="{{ route('admin.projects.store') }}">
    @csrf
    <div>
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="description">Descrizione</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <button type="submit">Salva</button>
</form>
