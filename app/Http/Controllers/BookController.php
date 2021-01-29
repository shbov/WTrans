<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::paginate(16);

        return view('book.index', ['books' => $books]);
    }

    public function show(Book $book)
    {
        return view('book.show', ['book' => $book]);
    }

    public function create()
    {
        return view('book.create');
    }

    public function join(Book $book)
    {
        if ($book->isBookMember(Auth::user()->id)) {
            return redirect()->route('books.show', $book->id)->with('error', 'Вы уже присоединились к переводу.');
        }

        $book->users()->attach(Auth::user()->id);
        return redirect()->route('books.show', $book->id)->with('success', 'Вы присоединились к переводу.');
    }

    public function leave(Book $book)
    {
        if ($book->isBookOwner(Auth::user()->id)) {
            return redirect()->route('books.show', $book->id)->with('error', 'Создатель не может покинуть перевод, его нужно удалить.');
        }

        if (!$book->isBookMember(Auth::user()->id)) {
            return redirect()->route('books.show', $book->id)->with('error', 'Вы не находитесь в переводе [soon be fixed]');
        }

        $book->users()->detach(Auth::user()->id);
        return redirect()->route('books.show', $book->id)->with('success', 'Вы покинули перевод.');
    }
}
