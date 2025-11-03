<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Menampilkan halaman dashboard
    public function dashboard()
    {
        return view('dashboard');
    }

    // Menampilkan halaman profil
    public function profile()
    {
        return view('profile');
    }
}
