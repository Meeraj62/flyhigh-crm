<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('user')->latest()->paginate(15);
        return view('students.index', compact('students'));
    }

    public function form(Student $student = null)
    {
        return view('students.form', compact('student'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'phone' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'passport_number' => 'nullable|string',
            'status' => 'required|string',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')
            ->with('toast', json_encode(['message' => 'Student created successfully', 'type' => 'success']));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'passport_number' => 'nullable|string',
            'status' => 'required|string',
        ]);

        $student->update($validated);

        return redirect()->route('students.index')
            ->with('toast', json_encode(['message' => 'Student updated successfully', 'type' => 'success']));
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('toast', json_encode(['message' => 'Student deleted successfully', 'type' => 'success']));
    }
}
