<?php

namespace App\Http\Livewire\Book;

use App\Models\Book;
use App\Models\Language;
use Livewire\Component;

/**
 * Class CreateComponent
 * @package App\Http\Livewire\Book
 */
class CreateComponent extends Component
{
    /**
     * @var
     */
    public $LanguageOptions;
    /**
     * @var
     */
    public $book;

    /**
     * @var string[]
     */
    protected $rules = [
        'book.name' => 'required|min:4|max:255',
        'book.native_name' => 'required|min:4|max:255',
        'book.native_language_id' => 'required|exists:languages,id',
        'book.language_id' => 'required|exists:languages,id',
        'book.desc' => 'nullable'
    ];

    /**
     * @var string[]
     */
    protected $validationAttributes = [
        'book.name' => 'название',
        'book.native_name' => 'название',
        'book.native_language_id' => 'язык',
        'book.language_id' => 'язык',
        'book.desc' => 'описание'
    ];

    /**
     * @var string[]
     */
    protected $messages = [
        'book.name.required' => ':Attribute обязательно для заполнения.',
        'book.native_name.required' => ':Attribute обязательно для заполнения.',
        'book.native_language_id.required' => ':Attribute обязателен для заполнения.',
        'book.language_id.required' => ':Attribute обязателен для заполнения.',
    ];

    /**
     *
     */
    public function mount()
    {
        $this->mountLanguageOptions();
    }

    /**
     *
     */
    public function mountLanguageOptions()
    {
        $languages = Language::all();

        $this->LanguageOptions = $languages->map(function ($item) {
            return ['id' => $item->id, 'value' => $item->native];
        });
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $this->validate();

        $created_book = Book::create($this->book);

        return redirect()->route('books.show', $created_book->id);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.book.create-component');
    }
}
