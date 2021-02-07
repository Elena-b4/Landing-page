<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceStoreRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class StoreController extends Controller
{
    public function __invoke(ServiceStoreRequest $request)
    {
        $data = $request->validated();
        Service::create($data);
        return Redirect::to(URL::previous() . "#services");
    }
}
