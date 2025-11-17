@extends('layouts.public')

@section('title', 'Courses - FlyHigh CRM')
@section('description', 'Explore our test preparation and skill development courses designed for international students.')

@section('content')

<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20 animate-fade-in-up">
            <span class="inline-block px-4 py-2 rounded-full bg-accent-100 text-accent-700 text-sm font-semibold mb-4">
                Test Preparation & Skills
            </span>
            <h1 class="text-5xl lg:text-7xl font-bold text-gray-900 mb-6 leading-tight">
                Expert-Designed
                <span class="block mt-2 bg-gradient-to-r from-primary-600 to-accent-600 bg-clip-text text-transparent">Courses</span>
            </h1>
            <p class="text-xl lg:text-2xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Master standardized tests, develop essential academic skills, and prepare thoroughly for your international education journey with our comprehensive course offerings.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($courses as $course)
            <div class="glass-light rounded-3xl overflow-hidden shadow-glass hover:shadow-glass-xl transition-all duration-500 hover:-translate-y-2 group animate-scale-in">
                <div class="h-56 bg-gradient-to-br from-accent-500 via-accent-600 to-primary-600 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="h-24 w-24 text-white/20 group-hover:scale-110 transition-transform duration-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                        </svg>
                    </div>
                    <div class="absolute bottom-4 left-4">
                        <span class="inline-flex items-center px-3 py-1.5 rounded-xl bg-white/95 backdrop-blur-sm text-success-700 text-xs font-bold shadow-glass">
                            <svg class="h-3.5 w-3.5 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            Published
                        </span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 line-clamp-2">{{ $course->title }}</h3>
                    <p class="text-gray-600 mb-6 line-clamp-3 leading-relaxed">{{ $course->description }}</p>

                    <div class="flex items-center justify-between mb-6 pt-4 border-t border-gray-100">
                        <div>
                            <div class="text-sm font-medium text-gray-500 mb-1">Price</div>
                            <span class="text-3xl font-bold bg-gradient-to-r from-primary-600 to-primary-500 bg-clip-text text-transparent">
                                ${{ number_format($course->price) }}
                            </span>
                        </div>
                    </div>

                    <a href="{{ route('public.course.detail', $course->slug) }}"
                       class="block w-full px-6 py-3.5 rounded-xl bg-gradient-to-r from-primary-600 to-primary-500 text-white text-center font-semibold hover:shadow-glass-lg hover:scale-[1.02] transition-all duration-300 group">
                        View Course Details
                        <svg class="inline-block ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-16">
                <div class="glass-light rounded-3xl p-16 inline-block max-w-2xl">
                    <svg class="h-20 w-20 text-gray-400 mx-auto mb-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                    </svg>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">New Courses Coming Soon</h3>
                    <p class="text-lg text-gray-600 mb-6">We're developing comprehensive test preparation courses tailored for international students.</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 rounded-xl glass-light text-gray-700 font-semibold hover:shadow-glass transition-all duration-300">
                        Get Notified
                        <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforelse
        </div>

        @if($courses->isNotEmpty())
        <!-- CTA Section with Professional Design -->
        <div class="mt-24">
            <div class="relative overflow-hidden rounded-5xl shadow-glass-xl">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-600 via-primary-700 to-accent-700"></div>
                <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjA1IiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-30"></div>
                <div class="relative p-12 lg:p-16 text-center">
                    <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">Need Expert Course Guidance?</h2>
                    <p class="text-xl text-white/95 mb-8 max-w-2xl mx-auto leading-relaxed">
                        Our education consultants will help you select the perfect course based on your target universities, test requirements, and timeline.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-10 py-5 rounded-2xl bg-white text-primary-700 text-lg font-bold shadow-glass-xl hover:shadow-glass-xl hover:scale-[1.02] transition-all duration-300 group">
                        Schedule Free Consultation
                        <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

@endsection
