@extends('layouts.public')

@section('title', $course->title . ' - FlyHigh CRM Courses')
@section('description', $course->description)

@section('content')

<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="mb-10 animate-fade-in-up">
            <ol class="flex items-center space-x-2 text-sm font-medium">
                <li><a href="{{ route('home') }}" class="text-gray-600 hover:text-primary-600 transition-colors">Home</a></li>
                <li class="text-gray-300">/</li>
                <li><a href="{{ route('public.courses') }}" class="text-gray-600 hover:text-primary-600 transition-colors">Courses</a></li>
                <li class="text-gray-300">/</li>
                <li class="text-gray-900 font-semibold">{{ $course->title }}</li>
            </ol>
        </nav>

        <!-- Hero Section -->
        <div class="glass-light rounded-4xl overflow-hidden shadow-glass-xl mb-12 animate-fade-in-up">
            <div class="h-64 bg-gradient-to-br from-accent-500 via-accent-600 to-primary-600 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjA1IiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-40"></div>

                <div class="relative h-full flex items-end p-8 lg:p-12">
                    <div>
                        <span class="inline-flex items-center px-4 py-2 rounded-xl bg-white/95 backdrop-blur-sm text-success-700 font-bold text-sm mb-4 shadow-glass">
                            <svg class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            Published Course
                        </span>
                        <h1 class="text-4xl lg:text-6xl font-bold text-white leading-tight drop-shadow-lg">{{ $course->title }}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Overview -->
                <div class="glass-light rounded-3xl p-8 lg:p-10 shadow-glass-lg animate-fade-in-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Course Overview</h2>
                    <p class="text-xl text-gray-700 leading-relaxed">{{ $course->description }}</p>
                </div>

                <!-- What You'll Learn -->
                <div class="glass-light rounded-3xl p-8 lg:p-10 shadow-glass-lg animate-fade-in-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">What You'll Master</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-start group">
                            <div class="flex-shrink-0 h-10 w-10 rounded-xl bg-gradient-to-br from-primary-500 to-primary-600 flex items-center justify-center mr-4 group-hover:scale-110 transition-transform shadow-glass">
                                <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Strategic Test-Taking</h3>
                                <p class="text-sm text-gray-600">Master proven strategies for maximum scores</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div class="flex-shrink-0 h-10 w-10 rounded-xl bg-gradient-to-br from-accent-500 to-accent-600 flex items-center justify-center mr-4 group-hover:scale-110 transition-transform shadow-glass">
                                <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Complete Section Coverage</h3>
                                <p class="text-sm text-gray-600">Comprehensive training for every exam section</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div class="flex-shrink-0 h-10 w-10 rounded-xl bg-gradient-to-br from-primary-600 to-primary-700 flex items-center justify-center mr-4 group-hover:scale-110 transition-transform shadow-glass">
                                <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Real Practice Questions</h3>
                                <p class="text-sm text-gray-600">Authentic questions from actual exams</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div class="flex-shrink-0 h-10 w-10 rounded-xl bg-gradient-to-br from-accent-600 to-accent-700 flex items-center justify-center mr-4 group-hover:scale-110 transition-transform shadow-glass">
                                <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Time Management Skills</h3>
                                <p class="text-sm text-gray-600">Techniques to optimize your test timing</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div class="flex-shrink-0 h-10 w-10 rounded-xl bg-gradient-to-br from-primary-500 to-primary-600 flex items-center justify-center mr-4 group-hover:scale-110 transition-transform shadow-glass">
                                <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Personalized Feedback</h3>
                                <p class="text-sm text-gray-600">Detailed progress tracking and improvement plans</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div class="flex-shrink-0 h-10 w-10 rounded-xl bg-gradient-to-br from-accent-500 to-accent-600 flex items-center justify-center mr-4 group-hover:scale-110 transition-transform shadow-glass">
                                <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Score Improvement</h3>
                                <p class="text-sm text-gray-600">Data-driven methods to boost your results</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Features -->
                <div class="glass-light rounded-3xl p-8 lg:p-10 shadow-glass-lg animate-fade-in-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Premium Features Included</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-start p-5 rounded-2xl glass-light hover:shadow-glass transition-all duration-300">
                            <div class="flex-shrink-0 h-14 w-14 rounded-2xl bg-gradient-to-br from-primary-500 to-primary-600 flex items-center justify-center mr-5 shadow-glass">
                                <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2">HD Video Lectures</h3>
                                <p class="text-gray-600 leading-relaxed">Professional instruction from top-rated educators with years of teaching experience</p>
                            </div>
                        </div>

                        <div class="flex items-start p-5 rounded-2xl glass-light hover:shadow-glass transition-all duration-300">
                            <div class="flex-shrink-0 h-14 w-14 rounded-2xl bg-gradient-to-br from-accent-500 to-accent-600 flex items-center justify-center mr-5 shadow-glass">
                                <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Practice Exams</h3>
                                <p class="text-gray-600 leading-relaxed">Full-length practice tests that simulate real exam conditions for optimal preparation</p>
                            </div>
                        </div>

                        <div class="flex items-start p-5 rounded-2xl glass-light hover:shadow-glass transition-all duration-300">
                            <div class="flex-shrink-0 h-14 w-14 rounded-2xl bg-gradient-to-br from-primary-600 to-primary-700 flex items-center justify-center mr-5 shadow-glass">
                                <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Study Resources</h3>
                                <p class="text-gray-600 leading-relaxed">Downloadable study guides, practice worksheets, and comprehensive reference materials</p>
                            </div>
                        </div>

                        <div class="flex items-start p-5 rounded-2xl glass-light hover:shadow-glass transition-all duration-300">
                            <div class="flex-shrink-0 h-14 w-14 rounded-2xl bg-gradient-to-br from-accent-600 to-accent-700 flex items-center justify-center mr-5 shadow-glass">
                                <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2">24/7 Expert Support</h3>
                                <p class="text-gray-600 leading-relaxed">Round-the-clock access to instructors and learning assistants whenever you need help</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sticky Sidebar -->
            <div class="lg:col-span-1">
                <div class="glass-light rounded-3xl p-8 shadow-glass-xl sticky top-24 animate-fade-in-up">
                    <div class="text-center mb-8 pb-8 border-b border-gray-200">
                        <div class="text-6xl font-bold bg-gradient-to-r from-primary-600 to-accent-600 bg-clip-text text-transparent mb-3">
                            ${{ number_format($course->price) }}
                        </div>
                        <p class="text-gray-600 font-medium">One-time investment • Lifetime access</p>
                    </div>

                    <div class="space-y-4 mb-8">
                        <a href="{{ route('contact') }}"
                           class="block w-full px-7 py-4 rounded-2xl bg-gradient-to-r from-primary-600 to-primary-500 text-white text-center font-bold shadow-glass-lg hover:shadow-glass-xl hover:scale-[1.02] transition-all duration-300 group">
                            Enroll Now
                            <svg class="inline-block ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>

                        <a href="{{ route('contact') }}"
                           class="block w-full px-7 py-4 rounded-2xl glass text-gray-700 text-center font-bold hover:shadow-glass transition-all duration-300">
                            Request More Info
                        </a>
                    </div>

                    <div class="pt-6 border-t border-gray-200">
                        <h3 class="font-bold text-gray-900 mb-5 text-lg">Course Includes:</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary-600 mr-3 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-700 font-medium">Lifetime course access</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary-600 mr-3 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-700 font-medium">Verified completion certificate</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary-600 mr-3 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-700 font-medium">Mobile & desktop access</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary-600 mr-3 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-700 font-medium">Personal instructor support</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary-600 mr-3 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-700 font-medium">30-day money-back guarantee</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Courses -->
        @if($relatedCourses->isNotEmpty())
        <div class="mt-24">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Related Courses</h2>
                <p class="text-xl text-gray-600">Expand your skills with these complementary courses</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($relatedCourses as $related)
                <div class="glass-light rounded-3xl p-7 shadow-glass hover:shadow-glass-xl transition-all duration-500 hover:-translate-y-2 group">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 line-clamp-2">{{ $related->title }}</h3>
                    <p class="text-gray-600 mb-6 line-clamp-3 leading-relaxed">{{ $related->description }}</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <span class="text-3xl font-bold bg-gradient-to-r from-primary-600 to-primary-500 bg-clip-text text-transparent">
                            ${{ number_format($related->price) }}
                        </span>
                        <a href="{{ route('public.course.detail', $related->slug) }}" class="inline-flex items-center text-sm font-bold text-primary-600 hover:text-primary-700 transition-colors group-hover:translate-x-1">
                            View Course
                            <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>

@endsection
