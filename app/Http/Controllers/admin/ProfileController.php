<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = CompanyProfile::all();

        return view('pages.admin.profile.index', compact('profiles'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $profile = CompanyProfile::findOrFail($id);

        return view('pages.admin.profile.edit', compact('profile'));
    }

    public function update(ProfileRequest $request, $id)
    {
        $data = $request->all();

        $profile = CompanyProfile::findOrFail($id);

        $profile->update([
            'name'     => $data['name'],
            'email'     => $data['email'],
            'address'     => $data['address'],
            'phone'     => $data['phone'],
            'description'     => $data['description'],
            'vision'     => $data['vision'],
            'mission'     => $data['mission']
        ]);

        return redirect()->route('profiles.index')->with(['success' => 'Profile Data successfully updated!']);
    }

    public function destroy($id)
    {
        //
    }
}
