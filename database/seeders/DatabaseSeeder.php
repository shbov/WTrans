<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Chapter;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminUserSeeder::class,
            LanguageSeeder::class,
            CategorySeeder::class,
        ]);

        User::factory()
            ->has(
                Book::factory()
                    ->count(rand(0, 20))
                    ->state(function (array $attributes, User $user) {
                        return ['created_by' => $user->id];
                    })
            )
            ->count(rand(0, 10))
            ->create()

            ->each(function ($user) {
                Book::where('created_by', $user->id)->each(function ($book) use ($user) {

                    $permission = Permission::create(['name' => 'books.view.' . $book->id]);
                    $user->givePermissionTo($permission);

                    $user->books()->attach($book->id);

                    Chapter::factory()
                        ->count(rand(0, 30))
                        ->state(function (array $attributes) use ($book) {
                            return ['book_id' => $book->id];
                        })
                        ->create();
                });
            });
    }
}
