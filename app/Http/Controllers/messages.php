<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messages extends Controller
{
    public function store(messages $request)
    {
        messages::create($request->validated());
    }
}
