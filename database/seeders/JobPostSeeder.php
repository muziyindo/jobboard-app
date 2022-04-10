<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobPost ;

class JobPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobPost::factory()->count(20)->create();
    }
}
