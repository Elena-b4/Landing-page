<?php


namespace App\Services;


use App\Http\Requests\Admin\PortfolioRequest;
use App\Http\Requests\Admin\PortfolioStoreRequest;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class PortfolioService
{
    public function storeProject(Array $data)
    {
        $fullImage = $data['path_full_img'];
        $image = $data['path_img'];
        $fullUrl = Storage::disk('local')->put('public/portfolio_images', $fullImage);
        $url = Storage::disk('local')->put('public/portfolio_images', $image);
        $fullUrl = str_replace("public", "storage", $fullUrl);
        $url = str_replace("public", "storage", $url);
        Project::create([
            'client_id' => $data['client_id'],
            'category_id' => $data['category_id'],
            'data' => $data['data'],
            'name' => $data['name'],
            'content' => $data['content'],
            'path_full_img' => $fullUrl,
            'path_img' => $url,
        ]);
    }

    public function updateProject(Array $data, Project $project)
    {
        if (isset($data['path_full_img'])) {
            $fullImage = $data['path_full_img'];
            $fullUrl = Storage::disk('local')->put('public/portfolio_images', $fullImage);
            $fullUrl = str_replace("public", "storage", $fullUrl);
            $data['path_full_img'] = $fullUrl;
        }
        if (isset($data['path_img'])) {
            $image = $data['path_img'];
            $url = Storage::disk('local')->put('public/portfolio_images', $image);
            $url = str_replace("public", "storage", $url);
            $data['path_img'] = $url;
        }
        $project->update($data);

    }
}
