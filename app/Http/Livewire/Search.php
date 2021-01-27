<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use App\Models\User;

/**
 * Class Search
 * @package App\Http\Livewire
 */
class Search extends Component
{
    /**
     * @var
     */
    public $query;
    /**
     * @var
     */
    public $books;
    /**
     * @var
     */
    public $users;
    /**
     * @var
     */
    public $type;

    /**
     * @var string[]
     */
    public $searchPlaceholders = [
        'Что-то потеряли?',
        'Поиск переводов',
        'Поиск пользователей',
        '@username'
    ];

    /**
     *
     */
    public function mount()
    {
        $this->resetFilters();
    }

    /**
     *
     */
    public function resetFilters()
    {
        $this->reset('query', 'books', 'type', 'users');
    }

    /**
     *
     */
    public function updatedQuery()
    {
        if (substr($this->query, 0, 1) == '@') {
            return $this->searchUsers();
        }

        return $this->searchBooks();
    }

    /**
     *
     */
    public function searchUsers()
    {
        $this->type = 'users';

        $this->users = User::where('name', 'like', '%' . substr($this->query, 1) . '%')
            ->limit(6)
            ->get()
            ->toArray();
    }

    /**
     *
     */
    public function searchBooks()
    {
        $this->type = 'books';

        $this->books = Book::where('name', 'like', '%' . $this->query . '%')
            ->limit(6)
            ->get()
            ->toArray();
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.search');
    }
}
