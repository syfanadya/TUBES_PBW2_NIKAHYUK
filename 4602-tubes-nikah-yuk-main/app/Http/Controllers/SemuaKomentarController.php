<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SemuaKomentarController extends Controller
{
    public function index()
    {
        return view('semuakomentar');
    }
}