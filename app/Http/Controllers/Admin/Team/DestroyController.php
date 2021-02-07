<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class DestroyController extends Controller
{
    public function __invoke(Team $worker)
    {
        $worker->delete();
        return Redirect::to(URL::previous() . "#team");
    }
}
