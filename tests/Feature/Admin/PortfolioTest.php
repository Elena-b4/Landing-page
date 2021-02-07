<?php

namespace Tests\Feature\Admin;


use App\Models\Category;
use App\Models\Project;
use App\Models\Client;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    use DatabaseTransactions;
    use WithoutMiddleware;

    /** @test */

    public function a_project_can_be_stored()
    {
        Storage::fake('local');
        $image = UploadedFile::fake()->image('123.jpg');
        $fullImage = UploadedFile::fake()->image('321.jpg');
        $client = Client::factory()->create();
        $category = Category::factory()->create();
        $args = [
            'client_id' => $client->id,
            'category_id' => $category->id,
            'data' => 'June 2019',
            'name' => 'Marketing',
            'content' => 'Content of marketing',
            'path_full_img' => $fullImage,
            'path_img' => $image,
        ];
        $response = $this->post('/admin/projects', $args);
        $response->assertRedirect(URL::previous() . '#portfolio');
    }

    /** @test */
    public function a_project_can_be_updated()
    {
        Storage::fake('local');
        $image = UploadedFile::fake()->image('123.jpg');
        $fullImage = UploadedFile::fake()->image('321.jpg');
        $project = Project::factory()->create([
            'path_full_img' => $fullImage,
            'path_img' => $image,
        ]);
        $client = Client::factory()->create();
        $category = Category::factory()->create();
        $newImage = UploadedFile::fake()->image('1.jpg');
        $newFullImage = UploadedFile::fake()->image('2.jpg');
        $newArgs = [
            'client_id' => $client->id,
            'category_id' => $category->id,
            'data' => 'June 2019',
            'name' => 'Edited Marketing',
            'content' => 'Content of marketing',
            'path_full_img' => $newFullImage,
            'path_img' => $newImage,
        ];
        $response = $this->patch('/admin/projects/' . $project->id, $newArgs);
        $project = $project->fresh();
        $this->assertEquals('Edited Marketing', $project->name);
        $response->assertRedirect(URL::previous() . '#portfolio');
    }

    /** @test */
    public function a_project_can_be_deleted()
    {
        Storage::fake('local');
        $image = UploadedFile::fake()->image('123.jpg');
        $fullImage = UploadedFile::fake()->image('321.jpg');
        $client = Client::factory()->create();
        $category = Category::factory()->create();
        $args = [
            'client_id' => $client->id,
            'category_id' => $category->id,
            'data' => 'June 2019',
            'name' => 'Marketing',
            'content' => 'Content of marketing',
            'path_full_img' => $fullImage,
            'path_img' => $image,
        ];
        $this->post('/admin/projects', $args);
        $project = Project::where('content', 'Content of marketing')->first();
        $response = $this->delete('/admin/projects/' . $project->id);

        $response->assertRedirect(URL::previous() . '#portfolio');
    }
}
