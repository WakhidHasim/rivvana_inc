<?php

namespace App\Http\Controllers\Admin;

use App\Models\Portfolio;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequest;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::with(['service'])->orderBy('id', 'DESC')->get();

        return view('pages.admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        $services = Service::all();

        return view('pages.admin.portfolio.create', compact('services'));
    }

    public function store(PortfolioRequest $request)
    {
        $slider1 = $request->file('slider1');
        $slider1->storeAs('public/portfolios', $slider1->hashName());

        $slider2 = $request->file('slider2');
        $slider2->storeAs('public/portfolios', $slider2->hashName());

        $slider3 = $request->file('slider3');
        $slider3->storeAs('public/portfolios', $slider3->hashName());

        Portfolio::create([
            'service_id'   => $request->service_id,
            'name'         => $request->name,
            'slug'         => $data['slug'] = Str::slug($request->name),
            'client'       => $request->client,
            'description'  => $request->description,
            'slider1'      => $slider1->hashName(),
            'slider2'      => $slider2->hashName(),
            'slider3'      => $slider3->hashName()
        ]);

        return redirect()->route('portfolios.index')->with(['success' => 'Portfolio data added successfully!']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $services = Service::all();

        return view('pages.admin.portfolio.edit', [
            'portfolio' => $portfolio,
            'services' => $services
        ]);
    }

    public function update(PortfolioRequest $request, $id)
    {
        $data = $request->all();

        $portfolio = Portfolio::findOrFail($id);

        if ($request->hasFile('slider1') && $request->hasFile('slider2') && $request->hasFile('slider3')) {
            $slider1 = $request->file('slider1');
            $slider1->storeAs('public/portfolios', $slider1->hashName());

            Storage::delete('public/portfolios/' . $portfolio->slider1);

            $slider2 = $request->file('slider2');
            $slider2->storeAs('public/portfolios', $slider2->hashName());

            Storage::delete('public/portfolios/' . $portfolio->slider2);

            $slider3 = $request->file('slider3');
            $slider3->storeAs('public/portfolios', $slider3->hashName());

            Storage::delete('public/portfolios/' . $portfolio->slider3);

            $portfolio->update([
                'service_id'   => $data['service_id'],
                'name'         => $data['name'],
                'slug'         => $data['slug'] = Str::slug($data['name']),
                'client'       => $data['client'],
                'description'   => $data['description'],
                'slider1'      => $slider1->hashName(),
                'slider2'      => $slider2->hashName(),
                'slider3'      => $slider3->hashName()
            ]);
        } else if ($request->hasFile('slider1')) {

            $slider1 = $request->file('slider1');
            $slider1->storeAs('public/portfolios', $slider1->hashName());

            Storage::delete('public/portfolios/' . $portfolio->slider1);

            $portfolio->update([
                'service_id'   => $data['service_id'],
                'name'         => $data['name'],
                'slug'         => $data['slug'] = Str::slug($data['name']),
                'client'       => $data['client'],
                'description'   => $data['description'],
                'slider1'      => $slider1->hashName(),

            ]);
        } else if ($request->hasFile('slider2')) {

            $slider2 = $request->file('slider2');
            $slider2->storeAs('public/portfolios', $slider2->hashName());

            Storage::delete('public/portfolios/' . $portfolio->slider2);

            $portfolio->update([
                'service_id'   => $data['service_id'],
                'name'         => $data['name'],
                'slug'         => $data['slug'] = Str::slug($data['name']),
                'client'       => $data['client'],
                'description'   => $data['description'],
                'slider2'      => $slider2->hashName(),
            ]);
        } else if ($request->hasFile('slider3')) {

            $slider3 = $request->file('slider3');
            $slider3->storeAs('public/portfolios', $slider3->hashName());

            Storage::delete('public/portfolios/' . $portfolio->slider3);

            $portfolio->update([
                'service_id'   => $data['service_id'],
                'name'         => $data['name'],
                'slug'         => $data['slug'] = Str::slug($data['name']),
                'client'       => $data['client'],
                'description'   => $data['description'],
                'slider3'      => $slider3->hashName(),
            ]);
        } else {
            $portfolio->update([
                'service_id'   => $data['service_id'],
                'name'         => $data['name'],
                'slug'         => $data['slug'] = Str::slug($data['name']),
                'client'       => $data['client'],
                'description'   => $data['description'],
            ]);
        }

        return redirect()->route('portfolios.index')->with(['success' => 'Portolio Data successfully updated!']);
    }


    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        Storage::delete('public/portfolios/' . $portfolio->slider1);
        Storage::delete('public/portfolios/' . $portfolio->slider2);
        Storage::delete('public/portfolios/' . $portfolio->slider3);

        $portfolio->delete();

        return redirect()->route('portfolios.index')->with(['success' => 'Portfolio data successfully deleted!']);
    }
}
