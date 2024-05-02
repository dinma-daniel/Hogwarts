<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Dashboard extends Controller
{

    public function borrowedBooks()
    {
        $borrowedBooks = Borrow::where('user_id', Auth::id())->with('book')->get();
        return view('dashboard', ['borrowedBooks' => $borrowedBooks]);
    }
}
