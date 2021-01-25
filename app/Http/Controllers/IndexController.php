<?php

namespace App\Http\Controllers;

use App\Models\Book;

class IndexController extends Controller
{
    public function index()
    {
        $books = [];
        // $books = Book::with('language', 'originalLanguage')->paginate(15);

        return view('index', ['books' => $books]);
    }
}
