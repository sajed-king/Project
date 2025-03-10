<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
     
        return [
            
        'name'=> $this->faker->name(),
        'description'=>$this->faker->paragraph(),
        'price'=> $this->faker->randomFloat(3,100,1000),
        'amount'=>$this->faker->randomNumber(5),
        'image'=> fake()->imageUrl,
        'amount'=>$this->faker->randomNumber(4)


        ];
    }
}
