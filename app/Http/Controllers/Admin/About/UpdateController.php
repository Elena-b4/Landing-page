<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PortfolioRequest;
use App\Http\Requests\Admin\StoriesRequest;
use App\Http\Requests\Customers\StoreRequest;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class UpdateController extends BaseController
{
    public function __invoke(StoriesRequest $request, Story $story)
    {
        $data = $request->validated();
        $this->service->updateStory($data, $story);
        return Redirect::to(URL::previous() . "#about");
    }
}
