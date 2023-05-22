<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function jsonResponse()
    {
        $data = [
            'message' => 'Success',
            'data' => [
                'name' => 'John Doe',
                'age' => 25
            ]
        ];

        return response()->json($data);
    }
}
