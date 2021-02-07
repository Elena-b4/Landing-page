<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function __invoke(Project $project)
    {
        return view('includes.portfolio_body_modal', compact('project'));
    }
}
