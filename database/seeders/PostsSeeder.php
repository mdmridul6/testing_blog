<?php

namespace Database\Seeders;

use App\Models\Posts;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posts::factory()->count(100)->create();
    }
}
