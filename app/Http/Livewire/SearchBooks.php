<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;

class SearchBooks extends Component
{
    public $query;
    public $books;
    public $highlightIndex;
    public $searchPlaceholders = [
        'Что-то потеряли?',
        'Поиск переводов',
    ];

    public function mount()
    {
        $this->resetFilters();
    }

    public function resetFilters()
    {
        $this->reset('query', 'highlightIndex', 'books');
    }

    public function incrementHighlight()
    {
        if ($this->highlightIndex === count($this->books) - 1) {
            $this->highlightIndex = 0;
            return;
        }
        $this->highlightIndex++;
    }

    public function decrementHighlight()
    {
        if ($this->highlightIndex === 0) {
            $this->highlightIndex = count($this->books) - 1;
            return;
        }
        $this->highlightIndex--;
    }

    public function selectBook()
    {
        $book = $this->books[$this->highlightIndex] ?? null;
        if ($book) {
            $this->redirect(route('show-book', $book['id']));
        }
    }

    public function updatedQuery()
    {
        $this->books = Book::where('name', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.search-books');
    }
}
