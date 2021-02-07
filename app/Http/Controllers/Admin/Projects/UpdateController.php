<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Requests\Admin\PortfolioRequest;
use App\Models\Project;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class UpdateController extends BaseController
{
    public function __invoke(PortfolioRequest $request, $id)
    {
        $project = Project::findOrFail($id);
        $data = $request->validated();
        $this->service->updateProject($data, $project);
        return Redirect::to(URL::previous() . "#portfolio");
    }
}
