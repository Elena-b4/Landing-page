<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeamStoreRequest;
use App\Models\Story;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class StoreController extends BaseController
{
    public function __invoke(TeamStoreRequest $request)
    {
        $data = $request->validated();
        $this->service->storeWorker($data);
        return Redirect::to(URL::previous() . "#team");
    }
}
