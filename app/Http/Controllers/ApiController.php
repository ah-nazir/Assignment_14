<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function handleApiRequest(Request $request)
    {
        $page = $request->query('page', null);
        // Rest of your code...
    }
}
