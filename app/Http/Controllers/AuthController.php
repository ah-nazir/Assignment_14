<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function handleRememberToken(Request $request)
    {
        $rememberToken = $request->cookie('remember_token', null);
        // Rest of your code...
    }
}
