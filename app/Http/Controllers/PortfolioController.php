<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function __invoke()
    {
        return view('pages.portfolio');
    }
}
