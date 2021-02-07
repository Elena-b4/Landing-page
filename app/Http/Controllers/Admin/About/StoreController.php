<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoriesStoreRequest;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class StoreController extends BaseController
{
    public function __invoke(StoriesStoreRequest $request)
    {
        $data = $request->validated();
        $this->service->storeStory($data);
        return Redirect::to(URL::previous() . "#about");
    }
}
