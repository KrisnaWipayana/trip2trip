<?php

namespace App\Controllers;

class Cdaftar extends BaseController
{
    public function daftar(): string
    {
        return view('main/daftar.php');
    }
}
