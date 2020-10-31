<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'desc'=>$this->faker->text,
            'image'=>$this->faker->image,
            'isActive'=>$this->faker->boolean,
            'thumbnail'=>$this->faker->image,
            'slug'=>$this->faker->url,
        ];
    }
}
