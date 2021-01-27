<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
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
            return '0';
        }

        return '1';
    }
}
