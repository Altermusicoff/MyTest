<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestTecnicoController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
}
