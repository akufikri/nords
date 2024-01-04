<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JelajahController extends Controller
{
    public function index()
    {
        return view("pages.jelajah");
    }
}
