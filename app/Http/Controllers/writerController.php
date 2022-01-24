<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class writerController extends Controller
{
    //
    public function index(){
        $writers = DB::table('writers')->select('writer_name')->get();

        return view('writer.writer',compact('writers'));
    }


    // sub-query uses here
    public function bookByWriter($writer_name){
        $books = DB::table('books')
            ->where('writer_id','=', function ($query) use ($writer_name) {
                $query->  select('id')->from('writers')->where('writer_name','=',$writer_name);
            })
            ->latest()->paginate(5)->onEachSide(2);


        return view('writer.bookByWriter',compact('books'));
    }
}
