<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PortfolioStoreRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class StoreController extends BaseController
{

    public function __invoke(PortfolioStoreRequest $request)
    {
        $data = $request->validated();
        $this->service->storeProject($data);
        return Redirect::to(URL::previous() . "#portfolio");
    }
}
