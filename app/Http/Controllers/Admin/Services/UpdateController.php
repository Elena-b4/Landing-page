<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class UpdateController extends Controller
{
    public function __invoke(ServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        $service->update($data);
        return Redirect::to(URL::previous() . "#services");
    }
}
