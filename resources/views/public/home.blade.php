@extends('layouts.public')

@section('title', 'FlyHigh CRM - Study Abroad Consultancy | Your Gateway to International Education')
@section('description', 'Expert study abroad consultancy services. Find top universities, programs, and courses worldwide. Get personalized guidance for your international education journey.')

@section('content')

<!-- Hero Section with Liquid Glass -->
<section class="relative py-20 lg:py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Hero Content -->
            <div class="animate-fade-in-up">
                <div class="inline-flex items-center px-4 py-2 rounded-full glass-light mb-6">
                    <span class="flex h-2 w-2 rounded-full bg-success-500 mr-2 animate-pulse"></span>
                    <span class="text-sm font-semibold text-gray-700">Trusted by 10,000+ Students</span>
                </div>

                <h1 class="text-5xl lg:text-7xl font-bold text-gray-900 leading-tight mb-6">
                    Your Gateway to
                    <span class="bg-gradient-to-r from-primary-600 via-blue-600 to-purple-600 bg-clip-text text-transparent">
                        International Education
                    </span>
                </h1>

                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Expert guidance for studying abroad. Discover top universities, programs, and courses tailored to your dreams. Start your journey with us today.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-2xl bg-gradient-to-r from-primary-500 to-primary-700 text-white text-lg font-semibold shadow-glass-xl hover:shadow-glass-xl hover:scale-105 transition-all duration-300">
                        Get Started
                        <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                    <a href="{{ route('public.universities') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-2xl glass-light text-gray-700 text-lg font-semibold hover:bg-white/50 transition-all duration-300">
                        Explore Universities
                        <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="mt-12 grid grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-gray-900">500+</div>
                        <div class="text-sm text-gray-600 mt-1">Universities</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-gray-900">50+</div>
                        <div class="text-sm text-gray-600 mt-1">Countries</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-gray-900">95%</div>
                        <div class="text-sm text-gray-600 mt-1">Success Rate</div>
                    </div>
                </div>
            </div>

            <!-- Hero Image/Cards -->
            <div class="relative animate-fade-in-down">
                <div class="grid grid-cols-2 gap-6">
                    <!-- Card 1 -->
                    <div class="glass-light rounded-3xl p-6 shadow-glass-lg hover:shadow-glass-xl transition-all duration-300 hover:-translate-y-2">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-blue-700 mb-4">
                            <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Top Universities</h3>
                        <p class="text-sm text-gray-600">Access to world-ranked institutions</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="glass-light rounded-3xl p-6 shadow-glass-lg hover:shadow-glass-xl transition-all duration-300 hover:-translate-y-2 mt-12">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-purple-500 to-purple-700 mb-4">
                            <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Expert Guidance</h3>
                        <p class="text-sm text-gray-600">Personalized counseling support</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="glass-light rounded-3xl p-6 shadow-glass-lg hover:shadow-glass-xl transition-all duration-300 hover:-translate-y-2">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-green-500 to-green-700 mb-4">
                            <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Visa Support</h3>
                        <p class="text-sm text-gray-600">Complete visa application help</p>
                    </div>

                    <!-- Card 4 -->
                    <div class="glass-light rounded-3xl p-6 shadow-glass-lg hover:shadow-glass-xl transition-all duration-300 hover:-translate-y-2 mt-12">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-pink-500 to-pink-700 mb-4">
                            <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Scholarships</h3>
                        <p class="text-sm text-gray-600">Financial aid opportunities</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Our Services</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Comprehensive support for your international education journey
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($services as $service)
            <div class="glass-light rounded-3xl p-8 shadow-glass hover:shadow-glass-lg transition-all duration-300 hover:-translate-y-2 group animate-scale-in">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-primary-500 to-primary-700 mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="h-9 w-9 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $service->name }}</h3>
                <p class="text-gray-600 mb-6 line-clamp-3">{{ $service->description }}</p>
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold text-primary-600">${{ number_format($service->price) }}</span>
                    <a href="{{ route('public.service.detail', $service->slug) }}" class="inline-flex items-center text-sm font-semibold text-primary-600 hover:text-primary-800 transition-colors duration-200">
                        Learn More
                        <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-12">
                <p class="text-gray-500">No services available at the moment.</p>
            </div>
            @endforelse
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('public.services') }}" class="inline-flex items-center px-8 py-4 rounded-2xl glass-light text-gray-700 text-lg font-semibold hover:bg-white/50 transition-all duration-300">
                View All Services
                <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Featured Universities Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Featured Universities</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Explore top-ranked universities from around the world
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($featuredUniversities as $university)
            <div class="glass-light rounded-3xl overflow-hidden shadow-glass hover:shadow-glass-lg transition-all duration-300 hover:-translate-y-2 group animate-fade-in-up">
                <div class="h-48 bg-gradient-to-br from-primary-400 to-primary-600 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="h-20 w-20 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/>
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="text-xl font-bold text-gray-900 line-clamp-2 flex-1">{{ $university->name }}</h3>
                        @if($university->is_featured)
                        <span class="inline-flex items-center px-2.5 py-1 rounded-lg bg-warning-100 text-warning-800 text-xs font-semibold">
                            <svg class="h-3 w-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            Featured
                        </span>
                        @endif
                    </div>
                    <div class="flex items-center text-sm text-gray-600 mb-4">
                        <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        {{ $university->city }}, {{ $university->country }}
                    </div>
                    <p class="text-gray-600 text-sm mb-6 line-clamp-3">{{ $university->description }}</p>
                    <a href="{{ route('public.university.detail', $university->slug) }}" class="inline-flex items-center justify-center w-full px-6 py-3 rounded-xl bg-gradient-to-r from-primary-500 to-primary-700 text-white font-semibold hover:shadow-glass-lg transition-all duration-300">
                        View Details
                        <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-12">
                <p class="text-gray-500">No featured universities available at the moment.</p>
            </div>
            @endforelse
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('public.universities') }}" class="inline-flex items-center px-8 py-4 rounded-2xl glass-light text-gray-700 text-lg font-semibold hover:bg-white/50 transition-all duration-300">
                Explore All Universities
                <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-primary-600 to-primary-800 opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="glass-dark rounded-5xl p-12 lg:p-16 shadow-glass-xl">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center animate-fade-in-up">
                    <div class="text-5xl lg:text-6xl font-bold text-white mb-2">500+</div>
                    <div class="text-lg text-white/80">Universities</div>
                </div>
                <div class="text-center animate-fade-in-up animation-delay-100">
                    <div class="text-5xl lg:text-6xl font-bold text-white mb-2">10K+</div>
                    <div class="text-lg text-white/80">Students Placed</div>
                </div>
                <div class="text-center animate-fade-in-up animation-delay-200">
                    <div class="text-5xl lg:text-6xl font-bold text-white mb-2">50+</div>
                    <div class="text-lg text-white/80">Countries</div>
                </div>
                <div class="text-center animate-fade-in-up animation-delay-300">
                    <div class="text-5xl lg:text-6xl font-bold text-white mb-2">95%</div>
                    <div class="text-lg text-white/80">Success Rate</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">What Students Say</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Hear from students who achieved their dreams with our guidance
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="glass-light rounded-3xl p-8 shadow-glass hover:shadow-glass-lg transition-all duration-300 animate-fade-in-up">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0 mr-4">
                        <div class="h-14 w-14 rounded-full bg-gradient-to-br from-primary-500 to-primary-700 flex items-center justify-center text-white text-xl font-bold shadow-glass">
                            JD
                        </div>
                    </div>
                    <div>
                        <div class="text-lg font-bold text-gray-900">John Doe</div>
                        <div class="text-sm text-gray-600">Harvard University</div>
                    </div>
                </div>
                <div class="flex mb-4">
                    @for($i = 0; $i < 5; $i++)
                    <svg class="h-5 w-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <p class="text-gray-600 italic">"FlyHigh CRM made my dream of studying at Harvard a reality. Their expert guidance throughout the application process was invaluable. Highly recommended!"</p>
            </div>

            <!-- Testimonial 2 -->
            <div class="glass-light rounded-3xl p-8 shadow-glass hover:shadow-glass-lg transition-all duration-300 animate-fade-in-up animation-delay-100">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0 mr-4">
                        <div class="h-14 w-14 rounded-full bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center text-white text-xl font-bold shadow-glass">
                            ES
                        </div>
                    </div>
                    <div>
                        <div class="text-lg font-bold text-gray-900">Emma Smith</div>
                        <div class="text-sm text-gray-600">Oxford University</div>
                    </div>
                </div>
                <div class="flex mb-4">
                    @for($i = 0; $i < 5; $i++)
                    <svg class="h-5 w-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <p class="text-gray-600 italic">"Outstanding service! The team's knowledge of the UK admission process was exceptional. I'm now pursuing my Master's at Oxford thanks to them."</p>
            </div>

            <!-- Testimonial 3 -->
            <div class="glass-light rounded-3xl p-8 shadow-glass hover:shadow-glass-lg transition-all duration-300 animate-fade-in-up animation-delay-200">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0 mr-4">
                        <div class="h-14 w-14 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center text-white text-xl font-bold shadow-glass">
                            MJ
                        </div>
                    </div>
                    <div>
                        <div class="text-lg font-bold text-gray-900">Michael Johnson</div>
                        <div class="text-sm text-gray-600">MIT</div>
                    </div>
                </div>
                <div class="flex mb-4">
                    @for($i = 0; $i < 5; $i++)
                    <svg class="h-5 w-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <p class="text-gray-600 italic">"Professional, efficient, and caring. FlyHigh CRM helped me secure admission and a scholarship at MIT. Forever grateful for their support!"</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass-dark rounded-5xl p-12 lg:p-16 shadow-glass-xl text-center animate-fade-in-up">
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">Ready to Start Your Journey?</h2>
            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Join thousands of successful students who achieved their dreams of studying abroad. Let's make your dreams a reality.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-2xl bg-white text-primary-700 text-lg font-semibold shadow-glass-lg hover:shadow-glass-xl hover:scale-105 transition-all duration-300">
                    Schedule Consultation
                    <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </a>
                <a href="{{ route('public.programs') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-2xl glass-light text-white text-lg font-semibold hover:bg-white/20 transition-all duration-300">
                    Browse Programs
                    <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
