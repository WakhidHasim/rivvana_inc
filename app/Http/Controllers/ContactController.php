<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\CompanyProfile;

class ContactController extends Controller
{
    public function __invoke()
    {
        $profiles = CompanyProfile::all();
        $services = Service::all();

        return view('pages.contact', [
            'profiles' => $profiles,
            'services' => $services
        ]);
    }
}
