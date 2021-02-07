<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class DestroyController extends Controller
{
    public function __invoke(Story $story)
    {
        $story->delete();
        return Redirect::to(URL::previous() . "#about");
    }
}
