<?php

namespace Database\Factories;

use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChapterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chapter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'native_name' => $this->faker->name,
            'mediainfo' => $this->faker->name,
            'status' => $this->faker->numberBetween(1, 5),
            'season' => $this->faker->numberBetween(1, 3),
            'episode' => $this->faker->numberBetween(1, 30)
        ];
    }
}
