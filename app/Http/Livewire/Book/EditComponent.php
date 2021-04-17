<?php

namespace App\Http\Livewire\Book;

use App\Models\Category;
use App\Models\Language;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditComponent extends Component
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
        'book.desc' => 'описание',
        'book.team_id' => 'команда',
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
        $user = Auth::user();
        $teams = $user->allTeams();

        $this->teamOptions = $teams->map(function ($item) {
            return ['id' => $item->id, 'value' => $item->name];
        });
    }

    public function update()
    {
        $this->validate();
        if ($this->book->team_id == '') $this->book->team_id = null;
        $this->book->save();

        return redirect()->route('books.show', $this->book->id);

    }

    public function render()
    {
        return view('livewire.book.edit-component');
    }
}
