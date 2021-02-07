<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Services\AboutService;
use App\Services\PortfolioService;
use App\Services\TeamService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct()
    {
        $this->service = new TeamService();
    }
}
