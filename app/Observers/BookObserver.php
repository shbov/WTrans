<?php

namespace App\Observers;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

/**
 * Class BookObserver
 * @package App\Observers
 */
class BookObserver
{

    /**
     * @param Book $book
     */
    public function creating(Book $book)
    {
        if (Auth::check()) {
            $user = Auth::user();

            $book->created_by = $user->id;
        }
    }

    /**
     * @param Book $book
     */
    public function created(Book $book)
    {
        if (Auth::check()) {
            $permission = Permission::create(['name' => 'books.view.' . $book->id]);
            Auth::user()->givePermissionTo($permission);

            Auth::user()->books()->attach($book->id);
        }
    }

    /**
     * Handle the Book "updated" event.
     *
     * @param \App\Models\Book $book
     * @return void
     */
    public function updated(Book $book)
    {
        //
    }

    /**
     * Handle the Book "deleted" event.
     *
     * @param \App\Models\Book $book
     * @return void
     */
    public function deleted(Book $book)
    {
        if (Auth::check()) {
            Auth::user()->books()->detach($book->id);
            Permission::findByName('books.view.' . $book->id)->delete();
        }
    }

    /**
     * Handle the Book "restored" event.
     *
     * @param \App\Models\Book $book
     * @return void
     */
    public function restored(Book $book)
    {
        //
    }

    /**
     * Handle the Book "force deleted" event.
     *
     * @param \App\Models\Book $book
     * @return void
     */
    public function forceDeleted(Book $book)
    {
        //
    }
}
