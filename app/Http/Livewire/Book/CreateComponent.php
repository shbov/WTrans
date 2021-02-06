<?php

namespace App\Http\Livewire\Book;

use App\Models\Book;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateComponent extends Component
{
    public $languageOptions, $categoryOptions, $teamOptions;
    public $book;

    protected $rules = [
        'book.name' => 'required|min:4|max:255',
        'book.native_name' => 'required|min:4|max:255',
        'book.native_language_id' => 'required|exists:languages,id',
        'book.language_id' => 'required|exists:languages,id',
        'book.category_id' => 'nullable|exists:categories,id',
        'book.team_id' => 'nullable|exists:teams,id',
        'book.desc' => 'nullable',
    ];

    protected $validationAttributes = [
        'book.name' => 'название',
        'book.native_name' => 'название',
        'book.native_language_id' => 'язык',
        'book.language_id' => 'язык',
        'book.category_id' => 'категория',
        'book.team_id' => 'команда',
        'book.desc' => 'описание',
    ];

    protected $messages = [
        'book.name.required' => ':Attribute обязательно для заполнения.',
        'book.native_name.required' => ':Attribute обязательно для заполнения.',
        'book.native_language_id.required' => ':Attribute обязателен для заполнения.',
        'book.language_id.required' => ':Attribute обязателен для заполнения.',
    ];

    public function mount()
    {
        $this->mountLanguageOptions();
        $this->mountCategoryOptions();
        $this->mountTeamOptions();
    }

    public function mountLanguageOptions()
    {
        $languages = Language::all();

        $this->languageOptions = $languages->map(function ($item) {
            return ['id' => $item->id, 'value' => $item->native];
        });
    }

    public function mountCategoryOptions()
    {
        $categories = Category::all();

        $this->categoryOptions = $categories->map(function ($item) {
            return ['id' => $item->id, 'value' => $item->name];
        });
    }

    public function mountTeamOptions()
    {
        $user  = Auth::user();
        $teams = $user->allTeams();

        $this->teamOptions = $teams->map(function ($item) {
            return ['id' => $item->id, 'value' => $item->name];
        });
    }

    public function store()
    {
        $this->validate();
        $book = Book::create($this->book);

        return redirect()->route('books.show', $book->id);
    }

    public function render()
    {
        return view('livewire.book.create-component');
    }
}
