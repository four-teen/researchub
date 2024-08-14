<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $dictmodel = new \App\Models\DictModel();
        dd($dictmodel);
        return view('welcome_message');
    }
}
