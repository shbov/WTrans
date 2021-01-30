<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;


class BookPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(?User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Book  $book
     * @return mixed
     */
    public function view(?User $user, Book $book)
    {
        return true || $user->can('books.view.' . $book->id);
        // Логика закрытых книг пока не сделана :/
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true || $user->can('books.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Book  $book
     * @return mixed
     */
    public function update(User $user, Book $book)
    {
        return $user->id === $book->created_by;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Book  $book
     * @return mixed
     */
    public function delete(User $user, Book $book)
    {
        return $user->id === $book->created_by;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Book  $book
     * @return mixed
     */
    public function restore(User $user, Book $book)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Book  $book
     * @return mixed
     */
    public function forceDelete(User $user, Book $book)
    {
        //
    }

    /**
     * Determine whether the user can join the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Book  $book
     * @return mixed
     */
    public function join(User $user, Book $book)
    {
        return $user->can('books.join');
    }

    /**
     * Determine whether the user can leave the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Book  $book
     * @return mixed
     */
    public function leave(User $user, Book $book)
    {
        return $user->can('books.leave');
    }
}
