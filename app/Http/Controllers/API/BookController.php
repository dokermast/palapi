<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Book;

use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function books()
    {
        $books = Book::all();
        return response()->json($books, 201);
    }


    public function book($id)
    {
        $book = Book::find($id);
        return response()->json($book, 201);
    }


    public function bookCreate(Request $request)
    {
        $book = Book::create($request->all());
        return response()->json($book, 201);
    }


    public function bookEdit(Request $request, Book $book)
    {
        $book->update($request->all());
        return response()->json($book, 200);
    }

}
