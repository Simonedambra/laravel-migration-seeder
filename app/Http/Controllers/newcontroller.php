<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train; // Importa il modello Train

class newcontroller extends Controller
{
    function show()
    {
        // Query al db
        $trains = Train::all();

        return view('main', compact('trains'));
    }
}