<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with(['student', 'consultant'])
            ->latest('start_at')
            ->paginate(15);
        return view('appointments.index', compact('appointments'));
    }

    public function form(Appointment $appointment = null)
    {
        $students = Student::all();
        $consultants = User::role(['admin', 'consultant'])->get();
        return view('appointments.form', compact('appointment', 'students', 'consultants'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'nullable|exists:students,id',
            'consultant_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_at' => 'required|date',
            'end_at' => 'required|date|after:start_at',
            'status' => 'required|string',
            'meeting_url' => 'nullable|url',
        ]);

        Appointment::create($validated);

        return redirect()->route('appointments.index')
            ->with('toast', json_encode(['message' => 'Appointment created successfully', 'type' => 'success']));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $validated = $request->validate([
            'student_id' => 'nullable|exists:students,id',
            'consultant_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_at' => 'required|date',
            'end_at' => 'required|date|after:start_at',
            'status' => 'required|string',
            'meeting_url' => 'nullable|url',
        ]);

        $appointment->update($validated);

        return redirect()->route('appointments.index')
            ->with('toast', json_encode(['message' => 'Appointment updated successfully', 'type' => 'success']));
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointments.index')
            ->with('toast', json_encode(['message' => 'Appointment deleted successfully', 'type' => 'success']));
    }
}
