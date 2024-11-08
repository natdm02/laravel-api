<h3>Technologies Used:</h3>
<ul>
    @forelse ($project->technologies as $technology)
        <li>{{ $technology->name }}</li>
    @empty
        <p>No technologies associated with this project.</p>
    @endforelse
</ul>
