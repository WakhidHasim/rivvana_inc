<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Service;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('pages.admin.dashboard', [
            'portfolios' => Portfolio::count(),
            'services' => Service::count(),
            'categories' => PortfolioCategory::count()
        ]);
    }
}
