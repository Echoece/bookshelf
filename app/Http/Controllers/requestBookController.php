<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class requestBookController extends Controller
{
    //
    public function index(){
        return view('request.requestBook');
    }
}