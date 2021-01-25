<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class IndexController extends Controller
{
    public function index()
    {
        $books = Book::with('language', 'originalLanguage')->paginate(15);

        return view('index', ['books' => $books]);
    }
}
