<?php


namespace App\Services;


use App\Http\Requests\Admin\PortfolioRequest;
use App\Http\Requests\Admin\PortfolioStoreRequest;
use App\Http\Requests\Admin\StoriesRequest;
use App\Http\Requests\Admin\StoriesStoreRequest;
use App\Http\Requests\Admin\TeamReqauest;
use App\Http\Requests\Admin\TeamStoreRequest;
use App\Models\Project;
use App\Models\Story;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class TeamService
{
    public function storeWorker(Array $data)
    {
        $avatar = $data['path'];
        $url = Storage::disk('local')->put('public/about_images', $avatar);
        $newUrl = str_replace("public", "storage", $url);
        Team::create([
            'path' => $newUrl,
            'name' => $data['name'],
            'position' => $data['position'],
            'twitter' => $data['twitter'],
            'facebook' => $data['facebook'],
            'linkedin' => $data['linkedin'],
        ]);
    }

    public function updateWorker(Array $data, Team $worker)
    {
        $avatar = $data['path'];
        $url = Storage::disk('local')->put('public/about_images', $avatar);
        $newUrl = str_replace("public", "storage", $url);
        $worker->update([
            'path' => $newUrl,
            'name' => $data['name'],
            'position' => $data['position'],
            'twitter' => $data['twitter'],
            'facebook' => $data['facebook'],
            'linkedin' => $data['linkedin'],
        ]);
    }
}
