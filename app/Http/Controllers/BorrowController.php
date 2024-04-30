<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function borrowBook(Request $request)
    {
        $user = auth()->user();
        $bookId = $request->input('book_id');

        $book = Book::findOrFail($bookId);

        $borrow = new Borrow();
        $borrow->user()->associate($user);
        $borrow->book()->associate($book);
        $borrow->borrow_date = now();
        $borrow->return_date = now()->addDays(14);
        $borrow->save();

        return redirect()->route('books.index')->with('success', 'Book borrowed successfully!');
    }

    public function returnBook(Request $request)
    {
        $borrowId = $request->input('borrow_id');
        $borrow = Borrow::findOrFail($borrowId);

        // Update return date or any other logic you need for returning books
        // For example:
        // $borrow->return_date = now();
        // $borrow->save();

        return redirect()->route('books.index')->with('success', 'Book returned successfully!');
    }
}
