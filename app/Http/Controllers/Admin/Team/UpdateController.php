<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeamReqauest;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class UpdateController extends BaseController
{
    public function __invoke(TeamReqauest $request, Team $worker)
    {
        $data = $request->validated();
        $this->service->updateWorker($data, $worker);
        return Redirect::to(URL::previous() . "#team");
    }
}
