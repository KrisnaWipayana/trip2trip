<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function login()
    {
        return redirect()->to('/login'); // Ganti dengan alamat login yang sesuai
    }
}
