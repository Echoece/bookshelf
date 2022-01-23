<?php

namespace App\Http\Controllers;

use App\Models\rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentController extends Controller
{

    public function comment(Request $request,$id){
        $rating = new rating();

        $rating->comment = $request->comment;
        $rating->rating = $request->rating;
        $rating->user_id = Auth::id();
        $rating->book_id = $id;

        $rating->save();

        // redirecting users with success message into session
        return redirect()->back()->with('success','Book Added Successfully');
    }
}
