<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class DestroyController extends Controller
{
    public function __invoke(Project $project)
    {
        $project->delete();
        return Redirect::to(URL::previous() . "#portfolio");
    }
}
