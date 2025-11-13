@extends('layouts.public')

@section('title', 'About Us - FlyHigh CRM')
@section('description', 'Learn about FlyHigh CRM, your trusted partner for international education and study abroad consultancy services.')

@section('content')

<!-- Hero Section -->
<section class="py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <h1 class="text-5xl lg:text-7xl font-bold text-gray-900 mb-6">
                About
                <span class="bg-gradient-to-r from-primary-600 via-blue-600 to-purple-600 bg-clip-text text-transparent">
                    FlyHigh CRM
                </span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Your trusted partner in making international education dreams come true. We've been guiding students to success for over a decade.
            </p>
        </div>

        <!-- Mission & Vision -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
            <div class="glass-light rounded-3xl p-10 shadow-glass-lg animate-slide-right">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-primary-500 to-primary-700 mb-6">
                    <svg class="h-9 w-9 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Mission</h2>
                <p class="text-gray-600 leading-relaxed">
                    To empower students worldwide with access to quality international education through expert guidance, personalized support, and comprehensive services that make studying abroad accessible and achievable.
                </p>
            </div>

            <div class="glass-light rounded-3xl p-10 shadow-glass-lg animate-slide-left">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-blue-700 mb-6">
                    <svg class="h-9 w-9 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Vision</h2>
                <p class="text-gray-600 leading-relaxed">
                    To be the world's most trusted education consultancy, recognized for transforming lives through education and creating a global community of successful students and professionals.
                </p>
            </div>
        </div>

        <!-- Values -->
        <div class="mb-20">
            <h2 class="text-4xl font-bold text-gray-900 text-center mb-12">Our Core Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="glass-light rounded-2xl p-8 text-center shadow-glass hover:shadow-glass-lg transition-all duration-300 animate-fade-in-up">
                    <div class="inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-success-500 to-success-700 mb-4">
                        <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Integrity</h3>
                    <p class="text-gray-600">Honest, transparent guidance you can trust</p>
                </div>

                <div class="glass-light rounded-2xl p-8 text-center shadow-glass hover:shadow-glass-lg transition-all duration-300 animate-fade-in-up animation-delay-100">
                    <div class="inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-blue-700 mb-4">
                        <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Excellence</h3>
                    <p class="text-gray-600">Commitment to outstanding results</p>
                </div>

                <div class="glass-light rounded-2xl p-8 text-center shadow-glass hover:shadow-glass-lg transition-all duration-300 animate-fade-in-up animation-delay-200">
                    <div class="inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-purple-500 to-purple-700 mb-4">
                        <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Student-Centric</h3>
                    <p class="text-gray-600">Your success is our priority</p>
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <div class="glass-dark rounded-5xl p-12 lg:p-16 shadow-glass-xl mb-20">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-5xl lg:text-6xl font-bold text-white mb-2">15+</div>
                    <div class="text-lg text-white/80">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl lg:text-6xl font-bold text-white mb-2">500+</div>
                    <div class="text-lg text-white/80">Partner Universities</div>
                </div>
                <div class="text-5xl lg:text-6xl font-bold text-white mb-2">10K+</div>
                    <div class="text-lg text-white/80">Students Placed</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl lg:text-6xl font-bold text-white mb-2">95%</div>
                    <div class="text-lg text-white/80">Success Rate</div>
                </div>
            </div>
        </div>

        <!-- Why Choose Us -->
        <div class="mb-20">
            <h2 class="text-4xl font-bold text-gray-900 text-center mb-12">Why Choose Us?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="glass-light rounded-2xl p-6 flex items-start shadow-glass hover:shadow-glass-lg transition-all duration-300">
                    <div class="flex-shrink-0 mr-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-500 text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Expert Counselors</h3>
                        <p class="text-gray-600">Experienced team with deep knowledge of international education</p>
                    </div>
                </div>

                <div class="glass-light rounded-2xl p-6 flex items-start shadow-glass hover:shadow-glass-lg transition-all duration-300">
                    <div class="flex-shrink-0 mr-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500 text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Personalized Approach</h3>
                        <p class="text-gray-600">Tailored solutions based on your unique goals and aspirations</p>
                    </div>
                </div>

                <div class="glass-light rounded-2xl p-6 flex items-start shadow-glass hover:shadow-glass-lg transition-all duration-300">
                    <div class="flex-shrink-0 mr-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-purple-500 text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">End-to-End Support</h3>
                        <p class="text-gray-600">From university selection to visa approval, we're with you every step</p>
                    </div>
                </div>

                <div class="glass-light rounded-2xl p-6 flex items-start shadow-glass hover:shadow-glass-lg transition-all duration-300">
                    <div class="flex-shrink-0 mr-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-500 text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Global Network</h3>
                        <p class="text-gray-600">Strong partnerships with top universities across 50+ countries</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="glass-light rounded-3xl p-12 text-center shadow-glass-lg">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Ready to Start Your Journey?</h2>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Let's discuss your goals and create a personalized plan for your international education.
            </p>
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-2xl bg-gradient-to-r from-primary-500 to-primary-700 text-white text-lg font-semibold shadow-glass-lg hover:shadow-glass-xl hover:scale-105 transition-all duration-300">
                Contact Us Today
                <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>

@endsection
