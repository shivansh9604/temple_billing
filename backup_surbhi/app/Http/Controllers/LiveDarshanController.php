<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveDarshanController extends Controller
{
    public function index()
    {
        return view('live-darshan');
    }
}
