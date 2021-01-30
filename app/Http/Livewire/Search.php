<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use App\Models\User;

class Search extends Component
{
    public $query, $books, $users, $type;

    public $searchPlaceholders = [
        'Что-то потеряли?',
        'Поиск переводов',
        'Поиск пользователей',
        '@username'
    ];

    public function mount()
    {
        $this->resetFilters();
    }

    public function resetFilters()
    {
        $this->reset('query', 'books', 'type', 'users');
    }

    public function updatedQuery()
    {
        if (substr($this->query, 0, 1) == '@') {
            return $this->searchUsers();
        }

        return $this->searchBooks();
    }

    public function searchUsers()
    {
        $this->type = 'users';

        $this->users = User::where('name', 'like', '%' . substr($this->query, 1) . '%')
            ->limit(6)
            ->get()
            ->toArray();
    }

    public function searchBooks()
    {
        $this->type = 'books';

        $this->books = Book::where('name', 'like', '%' . $this->query . '%')
            ->limit(6)
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.search');
    }
}
