<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutmeController extends Controller
{
    public function index()
    {

        return view('aboutme.index', compact('aboutme'));
    }
}
