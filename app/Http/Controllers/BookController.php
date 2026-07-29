<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //

    public function index()
    {
        $books = Book::all();
        return view('book.index',['books'=>$books]);
    }
     public function create()
    {
        return view('book.create');
    }

     public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'price' => 'required|numeric',
        ]);
        $newBook = Book::create($data);
        return redirect(route('book.index'));
    }
      public function edit(Book $book)
    {
        return view('book.update',['book'=> $book]);
    }

    public function update(Book $book,Request $request)
    {
         // dd($request->all());
        $data = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'price' => 'required|numeric',
        ]);
        $book->update($data);
        return redirect(route('book.index'));
    }

          public function remove(Book $book)
    {
        $book->delete();
        return redirect(route('book.index'));

    }

}
