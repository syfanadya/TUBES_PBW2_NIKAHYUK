<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class InfoRekeningController extends Controller
{
    public function index()
    {
        return view('inforekening');
    }
}