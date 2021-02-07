<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Client;
use App\Models\Customer;
use App\Models\Greeting;
use App\Models\Project;
use App\Models\Service;
use App\Models\Story;
use App\Models\Team;
use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $greeting = Greeting::find(1);
        $customers = Customer::all();
        $stories = Story::all();
        $workers = Team::all();
        $clients = Client::all();
        $categories = Category::all();
        $services = Service::all();
        $projects = Project::all();
        return view('admin.index', compact('customers', 'categories', 'greeting', 'stories', 'workers', 'projects', 'clients', 'services'));
    }
}
