<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Greeting;
use App\Models\Portfolio;
use App\Models\Project;
use App\Models\Section;
use App\Models\Service;
use App\Models\Story;
use App\Models\Team;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $firstService = Service::find(1);
        $secondService = Service::find(2);
        $thirdService = Service::find(3);

        $greeting = Greeting::find(1);

        $stories = Story::all();
        $workers = Team::all();
        $clients = Client::all();
        $services = Service::all();
        $projects = Project::all();
        return view('index', compact('firstService', 'secondService', 'thirdService', 'greeting', 'stories', 'workers', 'projects', 'clients', 'services'));
    }
}
