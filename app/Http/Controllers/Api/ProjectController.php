<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;



class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['type', 'technologies'])->get();
        return response()->json($projects);
    }

}
