<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProsesPembayaranController extends Controller
{
    public function index()
    {
        return view('prosespembayaran');
    }
}