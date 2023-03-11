<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id', 'DESC')->get();

        return view('pages.admin.service.index', compact('services'));
    }

    public function create()
    {
        return view('pages.admin.service.create');
    }

    public function store(ServiceRequest $request)
    {
        $icon = $request->file('icon');
        $icon->storeAs('public/services', $icon->hashName());

        Service::create([
            'name'     => $request->name,
            'icon'     => $icon->hashName(),
            'description'   => $request->description
        ]);

        return redirect()->route('services.index')->with(['success' => 'Service data added successfully!']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);

        return view('pages.admin.service.edit', [
            'service' => $service
        ]);
    }

    public function update(ServiceRequest $request, $id)
    {
        $data = $request->all();

        $service = Service::findOrFail($id);

        if ($request->hasFile('icon')) {

            $icon = $request->file('icon');
            $icon->storeAs('public/services', $icon->hashName());

            Storage::delete('public/services/' . $service->icon);

            $service->update([
                'name'     => $data['name'],
                'icon'     => $icon->hashName(),
                'description'   => $data['description']
            ]);
        } else {
            $service->update([
                'name'     => $data['name'],
                'description'   => $data['description']
            ]);
        }

        return redirect()->route('services.index')->with(['success' => 'Service Data successfully updated!']);
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        Storage::delete('public/services/' . $service->icon);

        $service->delete();

        return redirect()->route('services.index')->with(['success' => 'Service data successfully deleted!']);
    }
}
