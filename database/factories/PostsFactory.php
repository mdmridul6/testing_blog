<?php

namespace Database\Factories;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'users_id'=>"1",
            'categories_id'=>"1",
            'title'=>$this->faker->sentence(),
            'desc'=>$this->faker->paragraph(),
            'photo'=>$this->faker->imageUrl(),
            'status'=>random_int(0,1),
        ];
    }
}
