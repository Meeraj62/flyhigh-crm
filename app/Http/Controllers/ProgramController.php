<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::with('university')->latest()->paginate(15);
        return view('programs.index', compact('programs'));
    }

    public function form(Program $program = null)
    {
        $universities = University::where('is_active', true)->get();
        return view('programs.form', compact('program', 'universities'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'university_id' => 'required|exists:universities,id',
            'name' => 'required|string|max:255',
            'level' => 'required|string',
            'duration_years' => 'required|numeric',
            'tuition_fee' => 'nullable|numeric',
            'tuition_fee_currency' => 'nullable|string',
            'description' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        $validated['is_active'] = $request->has('is_active');

        Program::create($validated);

        return redirect()->route('programs.index')
            ->with('toast', json_encode(['message' => 'Program created successfully', 'type' => 'success']));
    }

    public function update(Request $request, Program $program)
    {
        $validated = $request->validate([
            'university_id' => 'required|exists:universities,id',
            'name' => 'required|string|max:255',
            'level' => 'required|string',
            'duration_years' => 'required|numeric',
            'tuition_fee' => 'nullable|numeric',
            'tuition_fee_currency' => 'nullable|string',
            'description' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        $validated['is_active'] = $request->has('is_active');

        $program->update($validated);

        return redirect()->route('programs.index')
            ->with('toast', json_encode(['message' => 'Program updated successfully', 'type' => 'success']));
    }

    public function destroy(Program $program)
    {
        $program->delete();

        return redirect()->route('programs.index')
            ->with('toast', json_encode(['message' => 'Program deleted successfully', 'type' => 'success']));
    }
}
