<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index()
    {
        return view('universities.index');
    }

    public function create()
    {
        return view('universities.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:universities',
            'country' => 'required|string',
            'city' => 'required|string',
        ]);

        University::create($validated);
        return redirect()->route('universities.index')->with('success', 'University created successfully');
    }

    public function show(University $university)
    {
        return view('universities.show', compact('university'));
    }

    public function edit(University $university)
    {
        return view('universities.edit', compact('university'));
    }

    public function update(Request $request, University $university)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:universities,slug,' . $university->id,
            'country' => 'required|string',
            'city' => 'required|string',
        ]);

        $university->update($validated);
        return redirect()->route('universities.index')->with('success', 'University updated successfully');
    }

    public function destroy(University $university)
    {
        $university->delete();
        return redirect()->route('universities.index')->with('success', 'University deleted successfully');
    }
}
