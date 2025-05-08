<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function prova()
    {
        return response()->json(['message' => 'ciao']); 
    }
}
