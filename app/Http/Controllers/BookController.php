<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class BookController extends Controller
{
    public function index()
    {

        $books = Book::orderByDesc('author')->get();
        return view('books', ['books' => $books]);
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', ['book' => $book]);
    }

    public function borrow(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $user = Auth::user();

        if ($user->hasBorrowedBook($book)) {
            return redirect()->route('books.index')->with('error', 'You have already borrowed this book.');
        }
        $borrow = new Borrow();
        $borrow->user_id = $user->id;
        $borrow->book_id = $book->id;
        $borrow->borrow_date = Carbon::now();
        $borrow->return_date = Carbon::now()->addDays(14);

        $borrow->save();

        return redirect()->route('books.index')->with('success', 'Book borrowed successfully!');
    }
}
