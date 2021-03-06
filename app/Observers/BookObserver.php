<?php

namespace App\Observers;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;

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

            $book->owner_id = $user->id;
        }
    }

    /**
     * @param Book $book
     */
    public function created(Book $book)
    {
        if (Auth::check()) {
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
