<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        // Fetch all projects from the database
        $projects = Project::all(); // Ensure you have the Project model imported
        return view('project', compact('projects')); // Pass the projects to the view
    }

    public function show($id)
    {
        // Fetch the project by ID (assuming you have a Project model)
        $project = Project::findOrFail($id);
        return view('project.show', compact('project')); // Adjust the view as necessary
    }
}
