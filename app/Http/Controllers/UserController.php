<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserAgent(Request $request)
    {
        $userAgent = $request->header('User-Agent');
        // Rest of your code...
    }
}
