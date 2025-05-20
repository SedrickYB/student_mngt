<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paulcontroller extends Controller
{
    public function index()
    {
        return view ('Sedrick.index');
    }

    public function create()
    {
        return view ('Sedrick.create');
    }

    public function store (Request $request)
    {
        $request-> Validate([

            'fname' => 'required|max:255|string',
            'mname' => 'required|max:255|string',
            'lname' => 'required|max:255|string',
            'age' => 'required|integer',
            'address' => 'required|max:255|string',
            'zip' => 'required|integer|max:4',

        ]);
        Sedrick::create($request -> all());
        
        return view ('Sedrick.index');
    }
}
