<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioCategoryRequest;
use App\Models\PortfolioCategory;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = PortfolioCategory::all();

        return view('pages.admin.category', compact('categories'));
    }

    public function create()
    {
        //
    }

    public function store(PortfolioCategoryRequest $request)
    {
        $data = $request->all();

        PortfolioCategory::create($data);

        return redirect()->route('categories.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(PortfolioCategoryRequest $request, $id)
    {
        $data = $request->all();

        $category = PortfolioCategory::findOrFail($id);

        $category->update([$data]);

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = PortfolioCategory::findOrFail($id);

        $category->delete();

        return redirect()->route('categories.index');
    }
}
