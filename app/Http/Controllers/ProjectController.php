<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\News;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(12);
        $randomNews = News::all()->random(2);
        return view('projects',
            [
                'randomNews' => $randomNews,
                'projects' => $projects,
            ]);
    }
}
