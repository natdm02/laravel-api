<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Technology;
use Illuminate\Support\Facades\Storage;



class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('index');

        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $types = Type::all();
        $technologies = Technology::all();
        return view('admin.projects.create', compact('types','technologies' ) );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {




        $request->validate([

            'name'           => 'required|string|max:255',
            'description'    => 'nullable|string',
            'type_id'        => 'required|exists:types,id',
            'technologies'   => 'required|array',
            'technologies.*' => 'exists:technologies,id',
            'image'          => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);


        $project= Project::create([

            'name'           => $request->name,
            'description'    => $request->description,
            'type_id'        => $request->type_id,
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projects', 'public');
            $project->image = $path;
            $project->save();
        }

        $project->technologies()->sync($request->technologies);


        // Project::create($request->all());

        return redirect()->route('admin.projects.index')->with('success', 'Progetto creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $project = Project::with('type','technologies')->findOrFail($id);
        return view('admin.projects.show', compact('project'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)

    {


        $project = Project::with('technologies')->findOrFail($id);
        $types = Type::all();
        $technologies = Technology::all();

        return view('admin.projects.edit', compact('project', 'types', 'technologies'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([

        'name'           => 'required|string|max:255',
        'type_id'        => 'required|exists:types,id',
        'technologies'   => 'nullable|array',
        'technologies.*' => 'exists:technologies,id',
    ]);

        $project->update([

        'name'           => $request->name,
        'description'    => $request->description,
        'type_id'        => $request->type_id,
    ]);

    if ($request->hasFile('image')) {

        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $path = $request->file('image')->store('projects', 'public');
                $project->image = $path;
                $project->save();
    }


    if ($request->has('technologies')) {
        $project->technologies()->sync($request->technologies);
    }

    return redirect()->route('admin.projects.index')->with('success', 'Progetto aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);

        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success','eliminato');
    }
}
