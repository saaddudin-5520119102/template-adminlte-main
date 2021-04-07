<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        return view('home', compact('user'));
    }

    public function books()
    {
        $user = Auth::user();
        $book = Book::all();

        return view('book', compact('user', 'book'));
    }
}
