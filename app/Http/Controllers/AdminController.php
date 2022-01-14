<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function allBook(){
        $books =  book::all();
        return view('allBook',compact('books'));
    }

    public function addBook(Request $request){
        // to do : from data validation

        // creating object and setting data
        $book = new book();
        $book->book_name = $request->book_name;
        $book->genre = $request->genre;
        $book->publish_year = $request->publish_year;
        $book->publication = $request->publication;
        $book->writer_id = $request->writer_id;
        $book->description = $request->description;
        // saving into table
        $book->save();
    }
}
