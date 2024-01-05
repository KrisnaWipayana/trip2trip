<?php

namespace App\Controllers;

class Cdashboard extends BaseController
{
    public function index(): string
    {
        return view('main/index.php');
    }
}
