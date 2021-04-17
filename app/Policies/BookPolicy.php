<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;


class BookPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function viewAny(?User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Book $book
     * @return mixed
     */
    public function view(?User $user, Book $book)
    {
        if ($user) {
            if ($book->team && $book->team->hasUser($user)) {
                return true;
            }

            if ($book->isBookMember($user->id)) {
                return true;
            }

            return true;
        }

        // TODO
        return $this->checkPerm(false, "У вас нет доступа к просмотру данной книги"); //TODO сделать "пермишены" настройки книги, ака public/private book
    }

    private function checkPerm(bool $access, string $message): Response
    {
        return $access ? Response::allow() : Response::deny($message);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $this->checkPerm($user->can('books.create'), 'Вы не можете создавать переводы');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Book $book
     * @return mixed
     */
    public function update(User $user, Book $book)
    {
        return $book->isBookOwner($user->id) || $user->can('books.edit.*');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Book $book
     * @return mixed
     */
    public function delete(User $user, Book $book)
    {
        // TODO: Убрать 'super-admin'
        return $book->isBookOwner($user->id) || $user->can('books.delete.*');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Book $book
     * @return mixed
     */
    public function restore(User $user, Book $book)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Book $book
     * @return mixed
     */
    public function forceDelete(User $user, Book $book)
    {
        //
    }

    /**
     * Determine whether the user can join the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Book $book
     * @return mixed
     */
    public function join(User $user, Book $book)
    {
        //TODO Тут нужна еще проверка на [open/close] Book
        return $user->can('books.join');
    }

    /**
     * Determine whether the user can leave the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Book $book
     * @return mixed
     */
    public function leave(User $user, Book $book)
    {
        //TODO Тут нужна еще проверка на [open/close] Book
        return $user->can('books.leave');
    }
}
