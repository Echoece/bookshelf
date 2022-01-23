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
}
