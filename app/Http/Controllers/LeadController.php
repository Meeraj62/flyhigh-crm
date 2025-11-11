<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::latest()->paginate(15);
        return view('leads.index', compact('leads'));
    }

    public function form(Lead $lead = null)
    {
        return view('leads.form', compact('lead'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'source' => 'nullable|string',
            'status' => 'required|string',
        ]);

        Lead::create($validated);

        return redirect()->route('leads.index')
            ->with('toast', json_encode(['message' => 'Lead created successfully', 'type' => 'success']));
    }

    public function update(Request $request, Lead $lead)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'source' => 'nullable|string',
            'status' => 'required|string',
        ]);

        $lead->update($validated);

        return redirect()->route('leads.index')
            ->with('toast', json_encode(['message' => 'Lead updated successfully', 'type' => 'success']));
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();

        return redirect()->route('leads.index')
            ->with('toast', json_encode(['message' => 'Lead deleted successfully', 'type' => 'success']));
    }
}
