<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user()->type;
        if ($user === "ADMIN") {
            // ADMIN bisa melihat semua buku dan menambahkan buku baru
            $books = Book::query();

            // Filter pencarian (opsional)
            if ($request->has('search') && !empty($request->search)) {
                $books->where('title', 'like', '%' . $request->search . '%')
                      ->orWhere('author', 'like', '%' . $request->search . '%');
            }

            // Ambil semua data buku (dengan paginasi)
            $books = $books->orderBy('created_at', 'desc')->paginate(10);

            // Kirim ke view admin
            return view('admin.books.index', compact('books'));
        } else if ($user === "USER") {
            
        }
    }
}
