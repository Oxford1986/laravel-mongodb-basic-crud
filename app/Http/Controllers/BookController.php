<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($id)
   {
        return view('books.show', [
           'book' => Book::where('ID', $id)->first()
       ]);    
   }
}
