<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function processForm(Request $request)
    {
        $name = $request->input('name');
        // Rest of your code...
    }
}
