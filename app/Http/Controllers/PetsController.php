<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function index() {
        $pets = [
            'Vintém',
            'Agata',
            'Gaspar',
            'Duque',
        ];

        return view('petIndex',compact('pets'));
    }
}
