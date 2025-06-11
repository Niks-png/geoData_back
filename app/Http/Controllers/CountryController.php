<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    public function create()
    {
        return view('countries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'area' => 'required|numeric',
            'population' => 'required|integer',
        ]);

        // Map 'area' input to 'area_km2' for the database
        $validated['area_km2'] = $validated['area'];
        unset($validated['area']);

        Country::create($validated);

        return redirect()->route('countries.index');
    }

    public function show(Country $country)
    {
        return view('countries.show', compact('country'));
    }

    public function edit(Country $country)
    {
        return view('countries.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'area' => 'required|numeric',
            'population' => 'required|integer',
        ]);

        // Map 'area' input to 'area_km2' for the database
        $validated['area_km2'] = $validated['area'];
        unset($validated['area']);

        $country->update($validated);

        return redirect()->route('countries.show', $country);
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('countries.index');
    }

    public function apiIndex()
    {
        $countries = Country::all();
        return response()->json($countries);
    }
}
