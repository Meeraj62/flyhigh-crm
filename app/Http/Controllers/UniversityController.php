<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UniversityController extends Controller
{
    public function index()
    {
        $universities = University::latest()->paginate(12);
        return view('universities.index', compact('universities'));
    }

    public function form(University $university = null)
    {
        return view('universities.form', compact('university'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string',
            'city' => 'required|string',
            'description' => 'nullable|string',
            'logo_url' => 'nullable|url',
            'website_url' => 'nullable|url',
            'ranking' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        $validated['is_active'] = $request->has('is_active');

        University::create($validated);

        return redirect()->route('universities.index')
            ->with('toast', json_encode(['message' => 'University created successfully', 'type' => 'success']));
    }

    public function update(Request $request, University $university)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string',
            'city' => 'required|string',
            'description' => 'nullable|string',
            'logo_url' => 'nullable|url',
            'website_url' => 'nullable|url',
            'ranking' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        $validated['is_active'] = $request->has('is_active');

        $university->update($validated);

        return redirect()->route('universities.index')
            ->with('toast', json_encode(['message' => 'University updated successfully', 'type' => 'success']));
    }

    public function destroy(University $university)
    {
        $university->delete();

        return redirect()->route('universities.index')
            ->with('toast', json_encode(['message' => 'University deleted successfully', 'type' => 'success']));
    }
}
