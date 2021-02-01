<?php

namespace App\Http\Controllers;

use App\Models\Book;

class IndexController extends Controller
{
    public function index()
    {
        // $books = [];
        $books = Book::with('language', 'nativeLanguage')->orderBy('updated_at')->limit(8)->get();

        return view('index', ['books' => $books]);
    }
}
