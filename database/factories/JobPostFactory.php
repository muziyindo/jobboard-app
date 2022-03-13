<?php

namespace Database\Factories;

use App\Models\JobPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'recruiter_id' =>  rand(1,100),
            'title' => $this->faker->paragraph(),
            'description' => $this->faker->sentence(),
            'closing_date' => now(),
            
        ];
    }
}
