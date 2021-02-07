<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class DestroyController extends Controller
{
    public function __invoke(Service $service)
    {
        $service->delete();
        return Redirect::to(URL::previous() . "#services");
    }
}
