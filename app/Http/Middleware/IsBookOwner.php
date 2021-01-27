<?php

namespace App\Http\Middleware;

use App\Models\Book;
use Closure;
use Illuminate\Http\Request;

class isBookOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $bookID = $request->segments()[1];
        $book = Book::findOrFail($bookID);

        if ($book->created_by !== $request->user()->id) {
            abort(403);
        }

        return $next($request);
    }
}
