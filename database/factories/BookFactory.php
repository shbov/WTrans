<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'original_name' => $this->faker->name,
            'desc' => $this->faker->paragraph(2),
            'language_id' => Language::inRandomOrder()->first()->id,
            'original_language_id' => Language::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id
        ];
    }
}
