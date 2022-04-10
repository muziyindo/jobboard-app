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
            'recruiting_company' => $this->faker->paragraph(),
            'title' => $this->faker->paragraph(),
            'recruiter_id' =>  rand(1,100),
            'description' => $this->faker->sentence(),
            'closing_date' => now(),
            'application_method' => $this->faker->paragraph(),
            'email_website' => $this->faker->email(),
            
        ];
    }
}
