<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class genreController extends Controller
{
    // aggregate function
    public function index(){
        $genres = DB::table('books')->select('genre')->distinct()->get();

        return view('genre.genre',compact('genres'));
    }

    public function bookByGenre($genre){
        $books = DB::table('books')->where('genre','=',$genre)->latest()->paginate(5)->onEachSide(2);

        return view('genre.bookByGenre',compact('books'));
    }
}
