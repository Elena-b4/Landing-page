<?php

namespace App\Http\Controllers\Admin\Greetings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GreetingRequest;
use App\Models\Greeting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class UpdateController extends Controller
{
    public function __invoke(GreetingRequest $request, Greeting $greeting)
    {
        $data = $request->validated();
        $greeting->update($data);
        return Redirect::to(URL::previous() . "#container");
    }

}
