<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class StatusPembayaranController extends Controller
{
    public function index()
    {
        return view('statuspembayaran');
    }
}