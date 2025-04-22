<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BorrowedBook;

class BookController extends Controller
{
    public function index()
    {
        // Menampilkan semua buku yang dipinjam dari database
        $books = BorrowedBook::all();
        return view('welcome', compact('books'));
    }

    public function showBorrowedBooks()
    {
        // Ini juga bisa menampilkan view berbeda kalau mau
        $books = BorrowedBook::all();
        return view('borrowed_books', compact('books'));
    }
}
