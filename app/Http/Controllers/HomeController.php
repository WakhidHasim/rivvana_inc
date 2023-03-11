<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use App\Models\Portfolio;
use App\Models\Service;

class HomeController extends Controller
{
    public function __invoke()
    {
        $services = Service::all();
        $profiles = CompanyProfile::all();
        $portfolios = Portfolio::latest()->paginate(6);

        return view('pages.home', [
            'services' => $services,
            'portfolios' => $portfolios,
            'profiles' => $profiles
        ]);
    }
}
