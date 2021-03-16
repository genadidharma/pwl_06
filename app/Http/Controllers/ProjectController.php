<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        echo 'Project';
    }

    public function show($slug){
        return view('project_detail', ['project' => Project::getProjectBySlug($slug)]);
    }
}
