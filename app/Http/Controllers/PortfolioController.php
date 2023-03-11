<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\CompanyProfile;

class PortfolioController extends Controller
{
    public function __invoke()
    {
        $services = Service::all();
        $profiles = CompanyProfile::all();
        $portfolios = Portfolio::latest()->paginate(9);

        return view('pages.portfolio', [
            'portfolios' => $portfolios,
            'profiles' => $profiles,
            'services' => $services
        ]);
    }
}
