<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Chapter;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersAndBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->has(
                Book::factory()
                    ->count(rand(0, 30))
                    ->state(function (array $attributes, User $user) {
                        return ['created_by' => $user->id];
                    })
            )
            ->count(rand(5, 15))
            ->create()

            ->each(function ($user) {
                Book::where('created_by', $user->id)->each(function ($book) use ($user) {
                    $user->books()->attach($book->id);

                    Chapter::factory()
                        ->count(rand(0, 50))
                        ->state(function (array $attributes) use ($book) {
                            return ['book_id' => $book->id];
                        })
                        ->create();
                });
            });
    }
}
