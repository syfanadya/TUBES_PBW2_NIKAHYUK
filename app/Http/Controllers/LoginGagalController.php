<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginGagalController extends Controller
{
    public function index()
    {
        return view('logingagal', ['title' => 'Login Page']);
    }
}
    