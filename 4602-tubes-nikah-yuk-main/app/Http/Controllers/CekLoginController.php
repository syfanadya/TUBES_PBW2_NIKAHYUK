<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekLoginController extends Controller
{
    public function ceklogin()
    {
        session_start();

        if (!isset($_SESSION['iduser'])) {
            // return response()->json(['message' => 'Silahkan login/masuk'], 403);
            header("refresh:3;url=login");
            echo "<h1>Silahkan login/masuk </h1>";
            die();
        }

        // Add any other logic you want to execute when the session is set
        // For example, return a success message
        header("refresh:3;url=popupsukses");
    }
}
