<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\rating;
use Illuminate\Http\Request;
use DB;

class BookController extends Controller
{
    //
    public function index(){
        $books = DB::table('books')->latest()->paginate(5)->onEachSide(2);

        return view('books.booklist',compact('books'));
    }

    public function editBook($id){
        $book = book::find($id);

//        $writer_name =
        return view('admin.edit',compact('book'));

    }

    public function updateBook(Request $request, $id){
        $book =  book::find($id)->update([
            'book_name' => $request->book_name,
            'genre' => $request->genre,
            'publish_year' => $request->publish_year,
            'publication' => $request->publication,
            'writer_id' => 1,
            'writer_name' => $request->writer_name,
            'description' => $request->description,
        ]);

        return redirect()->route('allBook')->with('success','Book Updated Successfully');
    }

    public function deleteBook($id){
        $book = book::find($id)->delete();

        return redirect()->route('allBook')->with('success','Book Deleted Successfully');
    }

    public function detailsBook($id){
        $book = book::find($id);
        $ratings = rating::all()->where('book_id','=',$id);
        $averageRating = DB::table('ratings')->where('book_id','=',$id)->avg('rating');

        return view('books.bookDetails',compact('book','ratings','averageRating'));
    }
}
