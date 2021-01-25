<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('language', 'originalLanguage')->paginate(16);

        return view('book.index', ['books' => $books]);
    }
}
