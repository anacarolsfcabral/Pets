<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnersController extends Controller
{

    public function index() {
        $owners = \App\Owner::all();

        return view('ownerIndex',compact('owners'));
    }
}
