<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Book
{
    public function index(){
        return view('book.create');
    }

    public function store(Book $book){
        $book->validate(
            ['book_name' => 'required|string'],
        );

        Book::create($book->all());
        return redirect()->back()->with('success', 'Book stored.');
    }

}
