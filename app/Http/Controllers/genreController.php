<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class genreController extends Controller
{
    //
    public function index(){
        // aggregate function
        $genres = DB::table('books')->select('genre')->distinct()->get();
        return view('genre.genre',compact('genres'));
    }
}
