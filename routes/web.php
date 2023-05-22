<?php

use Illuminate\Http\Request;

Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    $data = [
        'success' => true,
        'message' => 'Form submitted successfully.'
    ];

    return response()->json($data);
});
