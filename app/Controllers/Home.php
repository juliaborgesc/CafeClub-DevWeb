<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home/index');
    }
    public function planos()
    {
    return view('home/planos');
    }
    
}

