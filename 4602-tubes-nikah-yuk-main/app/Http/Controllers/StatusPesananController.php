<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class StatusPesananController extends Controller
{
    public function index()
    {
        return view('statuspesanan');
    }
}