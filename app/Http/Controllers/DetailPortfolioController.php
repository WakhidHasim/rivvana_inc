<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\CompanyProfile;

class DetailPortfolioController extends Controller
{
    public function __invoke($slug)
    {
        $profiles = CompanyProfile::all();
        $services = Service::all();
        $portfolio = Portfolio::with(['service'])
            ->where('slug', $slug)
            ->firstOrFail();

        return view('pages.portfolio-detail', [
            'profiles' => $profiles,
            'services' => $services,
            'portfolio' => $portfolio
        ]);
    }
}
