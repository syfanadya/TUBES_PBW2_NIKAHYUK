<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TulisKomentarController extends Controller
{
    public function index()
    {
        return view('tuliskomentar');
    }
}