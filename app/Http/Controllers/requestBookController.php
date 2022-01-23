<?php

namespace App\Http\Controllers;

use App\Models\book_request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class requestBookController extends Controller
{
    //
    public function index(){
        return view('request.requestBook');
    }

    public function bookRequest(Request $request){
        $book_request = new book_request();

        $book_request->requested_book = $request->book_name;
        $book_request->user_id = Auth::id();

        $book_request->save();

        return redirect()->back()->with('success','Book Added Successfully');

    }
}
