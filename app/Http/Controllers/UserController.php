<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function submit(Request $request) 
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required'
        ]);

        print_r($request->input());
    }
}
