<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/index.php');
    }

    public function about(): string
    {
        return view('pages/about.php');
    }
    
    public function faq(): string
    {
        return view('pages/faq.php');
    }
    
    public function menu(): string
    {
        return view('pages/menu.php');
    }
}
