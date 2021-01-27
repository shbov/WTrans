<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;

/**
 * Class CategoryController
 * @package App\Http\Controllers
 */
class CategoryController extends Controller
{
    /**
     * @param Category $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Category $category)
    {
        $books = Book::getBooksByCategory($category->id)->paginate(16);

        return view('category.show', ['books' => $books, 'category' => $category]);
    }
}
