<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(16);

        return view('book.index', ['books' => $books]);
    }

    public function show(Book $book)
    {
        // $r1 = Role::firstOrCreate(["name" => "Superadmin"]);
        // $r2 = Role::firstOrCreate(["name" => "Admin"]);
        // $r3 = Role::firstOrCreate(["name" => "User"]);

        // $p1 = Permission::firstOrCreate(['name' => 'manage users']);

        // $r1->givePermissionTo('manage users');

        // $user = Auth::user();
        // $user->assignRole($r1);
        // $user->assignRole($r2);
        // $user->assignRole($r3);

        return view('book.show', ['book' => $book]);
    }

    public function create()
    {
        return view('book.create');
    }

    public function join(Book $book)
    {
        $user_id = Auth::user()->id;

        if ($book->isBookMember($user_id)) {
            return redirect()->route('books.show', $book->id)->with('error', 'Вы уже присоединились к переводу.');
        }

        $book->users()->attach($user_id);
        return redirect()->route('books.show', $book->id)->with('success', 'Вы присоединились к переводу.');
    }

    public function leave(Book $book)
    {
        $user_id = Auth::user()->id;

        if ($book->isBookOwner($user_id)) {
            return redirect()->route('books.show', $book->id)->with('error', 'Создатель не может покинуть перевод, его нужно удалить.');
        }

        if (!($book->isBookMember($user_id))) {
            return redirect()->route('books.show', $book->id)->with('error', 'Вы не находитесь в переводе [soon be fixed]');
        }

        $book->users()->detach($user_id);
        return redirect()->route('books.show', $book->id)->with('success', 'Вы покинули перевод.');
    }
}
