<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginSuksesController extends Controller
{
    public function index()
    {
        return view('loginsukses', ['title' => 'Login Page']);
    }
}
    