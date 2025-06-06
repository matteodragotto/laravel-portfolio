<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $newProject = new Project();

            $newProject->project_name = $faker->sentence(3);
            $newProject->customer_name = $faker->name();
            $newProject->period = $faker->sentence();
            $newProject->description = $faker->paragraph();
            $newProject->type_id = rand(1, 8);

            $newProject->save();
        }
    }
}
