<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;


class PageController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return response()->json($projects);
    }

    public function getProjectBySlug($slug)
    {
        $project = Project::where('slug', $slug)->with('technology', 'types')->first();
        return response()->json(compact('project'));
    }
}
