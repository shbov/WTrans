<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{

    public function index()
    {
        $this->authorize('viewAny', Book::class);

        $books = Book::paginate(16);

        return view('book.index', ['books' => $books]);
    }

    public function show(Book $book)
    {
        $this->authorize('view', $book);

        return view('book.show', ['book' => $book]);
    }

    public function edit(Book $book)
    {
        $this->authorize('update', $book);

        return view('book.edit', ['book' => $book]);
    }

    public function create()
    {
        $this->authorize('create', Book::class);

        return view('book.create');
    }

    public function join(Book $book)
    {
        $this->authorize('join', $book);

        if ($book->isBookMember(Auth::user()->id)) {
            return redirect()->route('books.show', $book->id)->with('error', 'Вы уже присоединились к переводу.');
        }

        if ($book->team && $book->team->hasUser(Auth::user())) {
            return redirect()->route('books.show', $book->id)->with('error', 'Данный перевод привязан к вашей команде. Вам не нужно к нему присоединяться.');
        }

        Auth::user()->joinBook($book);
        return redirect()->route('books.show', $book->id)->with('success', 'Вы присоединились к переводу.');
    }

    public function leave(Book $book)
    {
        $this->authorize('leave', $book);

        if ($book->isBookOwner(Auth::user()->id)) {
            return redirect()->route('books.show', $book->id)->with('error', 'Создатель не может покинуть перевод.');
        }

        if (!$book->isBookMember(Auth::user()->id)) {
            return redirect()->route('books.show', $book->id)->with('error', 'Вы не находитесь в переводе.');
        }

        if ($book->team && $book->team->hasUser(Auth::user())) {
            return redirect()->route('books.show', $book->id)->with('error', 'Данный перевод прикреплен к команде, вы не можете его покинуть.');
        }

        Auth::user()->leaveBook($book);
        return redirect()->route('books.show', $book->id)->with('success', 'Вы покинули перевод.');
    }
}
