<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'client_id' => 1,
//            'category_id' => 1,
            'data' => 'July 2019',
            'name' => 'Marketing',
            'content' => 'Content of marketing',
        ];
    }
}
