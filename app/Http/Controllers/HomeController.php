<?php

namespace App\Http\Controllers;

use App\Models\University;
use App\Models\Program;
use App\Models\Course;
use App\Models\Service;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredUniversities = University::where('is_featured', true)
            ->where('is_active', true)
            ->take(6)
            ->get();

        $featuredPrograms = Program::where('is_featured', true)
            ->where('is_active', true)
            ->with('university')
            ->take(6)
            ->get();

        $courses = Course::where('is_published', true)
            ->take(3)
            ->get();

        $services = Service::where('is_active', true)
            ->take(6)
            ->get();

        return view('public.home', compact(
            'featuredUniversities',
            'featuredPrograms',
            'courses',
            'services'
        ));
    }

    public function about()
    {
        return view('public.about');
    }

    public function services()
    {
        $services = Service::where('is_active', true)->get();
        return view('public.services', compact('services'));
    }

    public function serviceDetail($slug)
    {
        $service = Service::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $relatedServices = Service::where('is_active', true)
            ->where('id', '!=', $service->id)
            ->take(3)
            ->get();

        return view('public.service-detail', compact('service', 'relatedServices'));
    }

    public function universities(Request $request)
    {
        $query = University::where('is_active', true);

        if ($request->has('country') && $request->country) {
            $query->where('country', $request->country);
        }

        if ($request->has('search') && $request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $universities = $query->paginate(12);
        $countries = University::where('is_active', true)->distinct()->pluck('country');

        return view('public.universities', compact('universities', 'countries'));
    }

    public function universityDetail($slug)
    {
        $university = University::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $programs = Program::where('university_id', $university->id)
            ->where('is_active', true)
            ->get();

        return view('public.university-detail', compact('university', 'programs'));
    }

    public function programs(Request $request)
    {
        $query = Program::where('is_active', true)->with('university');

        if ($request->has('degree_type') && $request->degree_type) {
            $query->where('degree_type', $request->degree_type);
        }

        if ($request->has('search') && $request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $programs = $query->paginate(12);
        $degreeTypes = Program::where('is_active', true)->distinct()->pluck('degree_type');

        return view('public.programs', compact('programs', 'degreeTypes'));
    }

    public function programDetail($slug)
    {
        $program = Program::where('slug', $slug)->where('is_active', true)->with('university')->firstOrFail();
        $relatedPrograms = Program::where('university_id', $program->university_id)
            ->where('id', '!=', $program->id)
            ->where('is_active', true)
            ->take(3)
            ->get();

        return view('public.program-detail', compact('program', 'relatedPrograms'));
    }

    public function courses()
    {
        $courses = Course::where('is_published', true)->get();
        return view('public.courses', compact('courses'));
    }

    public function courseDetail($slug)
    {
        $course = Course::where('slug', $slug)->where('is_published', true)->firstOrFail();
        $relatedCourses = Course::where('is_published', true)
            ->where('id', '!=', $course->id)
            ->take(3)
            ->get();

        return view('public.course-detail', compact('course', 'relatedCourses'));
    }

    public function blog(Request $request)
    {
        $query = BlogPost::where('status', 'published')->with('category', 'author');

        if ($request->has('category') && $request->category) {
            $query->whereHas('category', function($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        $posts = $query->latest()->paginate(9);
        $categories = BlogCategory::withCount('posts')->get();

        return view('public.blog', compact('posts', 'categories'));
    }

    public function blogPost($slug)
    {
        $post = BlogPost::where('slug', $slug)->where('status', 'published')->with('category', 'author')->firstOrFail();
        $relatedPosts = BlogPost::where('status', 'published')
            ->where('id', '!=', $post->id)
            ->where('blog_category_id', $post->blog_category_id)
            ->take(3)
            ->latest()
            ->get();

        return view('public.blog-post', compact('post', 'relatedPosts'));
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Here you would typically send an email or save to database
        // For now, just return success

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
