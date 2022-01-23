<?php

namespace App\Http\Controllers;

use DB;
use App\Models\book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function allBook(){
        // Read from the  table
        $books = DB::table('books')->latest()->get();

        //$books =  book::all();    <-- using model, another way of doing same thing

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
        $book->writer_id = 1;
        $book->writer_name = $request->writer_name;
        $book->description = $request->description;

        // Insert into table
        $book->save();

        // redirecting users with success message into session
        return redirect()->back()->with('success','Book Added Successfully');
    }
}
