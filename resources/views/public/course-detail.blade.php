@extends('layouts.public')

@section('title', $course->title . ' - FlyHigh CRM Courses')
@section('description', $course->description)

@section('content')

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="mb-8 animate-fade-in-up">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="{{ route('home') }}" class="text-gray-600 hover:text-primary-600 transition-colors">Home</a></li>
                <li class="text-gray-400">/</li>
                <li><a href="{{ route('public.courses') }}" class="text-gray-600 hover:text-primary-600 transition-colors">Courses</a></li>
                <li class="text-gray-400">/</li>
                <li class="text-gray-900 font-semibold">{{ $course->title }}</li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="glass-light rounded-3xl p-8 lg:p-12 shadow-glass-lg animate-fade-in-up">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="inline-flex items-center px-4 py-2 rounded-xl bg-success-100 text-success-800 font-semibold">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Published Course
                        </span>
                    </div>

                    <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">{{ $course->title }}</h1>

                    <div class="prose prose-lg max-w-none mb-8">
                        <p class="text-xl text-gray-600 leading-relaxed">{{ $course->description }}</p>

                        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">What You'll Learn</h2>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-success-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Master essential test-taking strategies</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-success-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Comprehensive coverage of all exam sections</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-success-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Practice with real exam questions</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-success-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Time management techniques</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-success-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Personalized feedback and progress tracking</span>
                            </li>
                        </ul>

                        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Course Features</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-10 w-10 rounded-xl bg-gradient-to-br from-primary-500 to-primary-700 flex items-center justify-center mr-4">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-1">Video Lectures</h3>
                                    <p class="text-gray-600">HD video lessons from expert instructors</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-10 w-10 rounded-xl bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center mr-4">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-1">Practice Tests</h3>
                                    <p class="text-gray-600">Full-length practice exams</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-10 w-10 rounded-xl bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center mr-4">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-1">Study Materials</h3>
                                    <p class="text-gray-600">Downloadable resources and guides</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-10 w-10 rounded-xl bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center mr-4">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-1">24/7 Support</h3>
                                    <p class="text-gray-600">Get help whenever you need it</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="glass-light rounded-3xl p-8 shadow-glass-lg mb-8 sticky top-24 animate-fade-in-up">
                    <div class="text-center mb-6">
                        <div class="text-5xl font-bold text-primary-600 mb-2">${{ number_format($course->price) }}</div>
                        <p class="text-gray-600">one-time payment</p>
                    </div>

                    <a href="{{ route('contact') }}"
                       class="block w-full px-6 py-4 rounded-2xl bg-gradient-to-r from-primary-500 to-primary-700 text-white text-center font-semibold shadow-glass-lg hover:shadow-glass-xl hover:scale-105 transition-all duration-300 mb-4">
                        Enroll Now
                        <svg class="inline-block ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>

                    <a href="{{ route('contact') }}"
                       class="block w-full px-6 py-4 rounded-2xl glass text-gray-700 text-center font-semibold hover:bg-white/50 transition-all duration-300">
                        Request Info
                    </a>

                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <h3 class="font-bold text-gray-900 mb-4">This Course Includes:</h3>
                        <ul class="space-y-3 text-sm text-gray-600">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Lifetime access
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Certificate of completion
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Mobile and desktop access
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Expert instructor support
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Money-back guarantee
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Courses -->
        @if($relatedCourses->isNotEmpty())
        <div class="mt-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Related Courses</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($relatedCourses as $related)
                <div class="glass-light rounded-2xl p-6 shadow-glass hover:shadow-glass-lg transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $related->title }}</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $related->description }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-primary-600">${{ number_format($related->price) }}</span>
                        <a href="{{ route('public.course.detail', $related->slug) }}" class="text-sm font-semibold text-primary-600 hover:text-primary-800">
                            Learn More →
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
