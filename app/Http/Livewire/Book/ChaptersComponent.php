<?php

namespace App\Http\Livewire\Book;

use App\Models\Chapter;
use Livewire\Component;
use Livewire\WithPagination;

class ChaptersComponent extends Component
{
    use WithPagination;

    public $book_id;

    public function render()
    {
        return view(
            'livewire.book.chapters-component',
            [
                'chapters' => Chapter::where('book_id', $this->book_id)->paginate(12)
            ]
        );
    }
}
