<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function index() {

        $pets = \App\Pet::all();


        return view('petIndex',compact('pets'));
    }
}
