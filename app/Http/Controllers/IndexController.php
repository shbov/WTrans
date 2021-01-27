<?php

namespace App\Http\Controllers;

use App\Models\Book;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $books = [];
        // $books = Book::with('language', 'nativeLanguage')->paginate(15);

        return view('index', ['books' => $books]);
    }
}
