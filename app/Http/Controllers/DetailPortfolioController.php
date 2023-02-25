<?php

namespace App\Http\Controllers;


class DetailPortfolioController extends Controller
{
    public function __invoke()
    {
        return view('pages.portfolio-detail');
    }
}
