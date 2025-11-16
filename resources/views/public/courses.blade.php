@extends('layouts.public')

@section('title', 'Courses - FlyHigh CRM')
@section('description', 'Explore our test preparation and skill development courses designed for international students.')

@section('content')

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-6">Our Courses</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Prepare for your international education journey with our expertly designed courses
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($courses as $course)
            <div class="glass-light rounded-3xl overflow-hidden shadow-glass hover:shadow-glass-lg transition-all duration-300 hover:-translate-y-2 group animate-scale-in">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="h-20 w-20 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                        </svg>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $course->title }}</h3>
                    <p class="text-gray-600 mb-6 line-clamp-3">{{ $course->description }}</p>

                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <span class="text-3xl font-bold text-primary-600">${{ number_format($course->price) }}</span>
                        </div>
                        <span class="inline-flex items-center px-3 py-1 rounded-lg bg-success-100 text-success-800 text-xs font-semibold">
                            <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Published
                        </span>
                    </div>

                    <a href="{{ route('public.course.detail', $course->slug) }}"
                       class="block w-full px-6 py-3 rounded-xl bg-gradient-to-r from-primary-500 to-primary-700 text-white text-center font-semibold hover:shadow-glass-lg transition-all duration-300">
                        Learn More
                        <svg class="inline-block ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-12">
                <div class="glass-light rounded-3xl p-12 inline-block">
                    <svg class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    <p class="text-gray-500 text-lg">No courses available at the moment.</p>
                    <p class="text-gray-400 text-sm mt-2">Check back soon for upcoming courses!</p>
                </div>
            </div>
            @endforelse
        </div>

        @if($courses->isNotEmpty())
        <!-- CTA Section -->
        <div class="mt-20">
            <div class="glass-dark rounded-5xl p-12 lg:p-16 shadow-glass-xl text-center">
                <h2 class="text-4xl font-bold text-white mb-6">Need Help Choosing?</h2>
                <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                    Talk to our experts to find the right course for your goals and requirements.
                </p>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-2xl bg-white text-primary-700 text-lg font-semibold shadow-glass-lg hover:shadow-glass-xl hover:scale-105 transition-all duration-300">
                    Get Course Guidance
                    <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>
        @endif
    </div>
</section>

@endsection
