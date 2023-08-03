<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiturController extends Controller
{
    public function ph()
    {
        return view('ph');
    }

    public function do()
    {
        return view('do');
    }

    public function tds()
    {
        return view('tds');
    }

    public function suhu()
    {
        return view('suhu');
    }

    public function report()
    {
        return view('report');
    }
}
