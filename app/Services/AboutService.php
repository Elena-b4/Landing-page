<?php


namespace App\Services;


use App\Http\Requests\Admin\PortfolioRequest;
use App\Http\Requests\Admin\PortfolioStoreRequest;
use App\Http\Requests\Admin\StoriesRequest;
use App\Http\Requests\Admin\StoriesStoreRequest;
use App\Models\Project;
use App\Models\Story;
use Illuminate\Support\Facades\Storage;

class AboutService
{
    public function storeStory(Array $data)
    {
        $image = $data['path_img'];
        $url = Storage::disk('local')->put('public/about_images', $image);
        $newUrl = str_replace("public", "storage", $url);
        Story::create([
            'path_img' => $newUrl,
            'time' => $data['time'],
            'title' => $data['title'],
            'content' => $data['content'],
        ]);
    }

    public function updateStory(Array $data, Story $story)
    {

        if (isset($data['path_img'])) {
            $image = $data['path_img'];
            $url = Storage::disk('local')->put('public/about_images', $image);
            $url = str_replace("public", "storage", $url);
        } else {
            $url = $story->path_img;
        }
        $data['path_img'] = $url;
        $story->update($data);
    }
}
