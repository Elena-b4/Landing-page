<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Controllers\Controller;
use App\Services\PortfolioService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct()
    {
        $this->service = new PortfolioService();
    }
}
