<?php

namespace Database\Factories;

use App\Models\Goods;
use Illuminate\Database\Eloquent\Factories\Factory;

class GoodsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Goods::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl(640, 480, 'business'),
            'category' => $this->faker->company,
            'name' => $this->faker->text(15),
            'price' => $this->faker->numberBetween(15, 100)
        ];
    }
}
