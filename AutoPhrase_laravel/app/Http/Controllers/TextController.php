<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    public function index()
    {
        return view('text');;
    }

    public function store(Request $request)
    {
        
        return view('text', ['data' => $request]);;
    }


}
