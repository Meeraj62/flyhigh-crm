<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('instructor')->latest()->paginate(12);
        return view('courses.index', compact('courses'));
    }

    public function form(Course $course = null)
    {
        $instructors = User::role(['admin', 'consultant'])->get();
        return view('courses.form', compact('course', 'instructors'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'code' => 'nullable|string|unique:courses',
            'description' => 'nullable|string',
            'instructor_id' => 'required|exists:users,id',
            'duration_hours' => 'nullable|integer',
            'is_published' => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_published'] = $request->has('is_published');

        Course::create($validated);

        return redirect()->route('courses.index')
            ->with('toast', json_encode(['message' => 'Course created successfully', 'type' => 'success']));
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'code' => 'nullable|string|unique:courses,code,' . $course->id,
            'description' => 'nullable|string',
            'instructor_id' => 'required|exists:users,id',
            'duration_hours' => 'nullable|integer',
            'is_published' => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_published'] = $request->has('is_published');

        $course->update($validated);

        return redirect()->route('courses.index')
            ->with('toast', json_encode(['message' => 'Course updated successfully', 'type' => 'success']));
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')
            ->with('toast', json_encode(['message' => 'Course deleted successfully', 'type' => 'success']));
    }
}
