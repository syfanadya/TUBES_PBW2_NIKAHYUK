<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProsesPesananController extends Controller
{
    public function index()
    {
        return view('prosespesanan');
    }
}