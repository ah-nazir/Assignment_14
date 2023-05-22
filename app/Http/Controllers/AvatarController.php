<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function handleFileUpload(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = $avatar->getClientOriginalName();
            $avatar->move('public/uploads', $filename);
            // Rest of your code...
        }
    }
}
