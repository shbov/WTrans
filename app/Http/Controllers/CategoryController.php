<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $books = Book::getBooksByCategory($category->id)->paginate(16);

        return view('category.show', ['books' => $books, 'category' => $category]);
    }
}
