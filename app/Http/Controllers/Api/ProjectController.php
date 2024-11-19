<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;



class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['type', 'technologies'])->get();

        $projects->map(function ($project) {
            if ($project->image) {
                $project->image = asset('storage/' . $project->image);
            }
            return $project;
        });

        return response()->json($projects);
    }

}
