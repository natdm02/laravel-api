<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;


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
        return view('admin.projects.create', compact('types') );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //  dd($request->all());


        $request->validate([

            'name'    => 'required|string|max:255',
            'description' => 'nullable|string',
            'type_id' => 'required|exists:types,id',

        ]);

        Project::create([
            'title' => $request->name,
            'description' => $request->description,
            'type_id' => $request->type_id,
        ]);


        // Project::create($request->all());
        return redirect()->route('admin.projects.index')->with('success', 'Progetto creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::with('type')->findOrFail($id);
        return view('admin.projects.show', compact('project'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        $types = Type::all();
        return view('admin.projects.edit', compact('project', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);


        $request->validate([

            'name'    => 'required|string|max:255',
            'type_id' => 'required|exists:types,id',
        ]);

        $project->update([
            'title' => $request->name,
            'description' => $request->description,
            'type_id' => $request->type_id,
        ]);

        // $project->update($request->all());

        return redirect()->route('admin.projects.index')->with('success', 'Progetto aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success','eliminato');
    }
}
