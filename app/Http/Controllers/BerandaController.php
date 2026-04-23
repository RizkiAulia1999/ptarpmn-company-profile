<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function tentang()
    {
        return view('front.tentang');
    }

    public function contact()
    {
        return view('front.contact');
    }
    public function proyek()
    {
        return view('front.proyek');
    }
}
