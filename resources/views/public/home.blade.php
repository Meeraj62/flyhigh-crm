@extends('layouts.public')

@section('title', 'FlyHigh CRM - Study Abroad Consultancy | Your Gateway to International Education')
@section('description', 'Expert study abroad consultancy services. Find top universities, programs, and courses worldwide. Get personalized guidance for your international education journey.')

@section('content')

<!-- Hero Section with Sophisticated Design -->
<section class="relative py-24 lg:py-32 overflow-hidden">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-br from-primary-50/30 via-white to-accent-50/20"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Hero Content -->
            <div class="animate-fade-in-up space-y-8">
                <div class="inline-flex items-center px-5 py-2.5 rounded-full glass-light shadow-glass">
                    <span class="flex h-2.5 w-2.5 rounded-full bg-primary-500 mr-3 animate-pulse"></span>
                    <span class="text-sm font-semibold text-gray-800">Trusted by 10,000+ Students Worldwide</span>
                </div>

                <h1 class="text-5xl lg:text-7xl font-bold text-gray-900 leading-[1.1]">
                    Your Gateway to
                    <span class="block mt-2 bg-gradient-to-r from-primary-600 to-primary-500 bg-clip-text text-transparent">
                        Global Education
                    </span>
                    <span class="block mt-2 text-accent-600">Excellence</span>
                </h1>

                <p class="text-xl lg:text-2xl text-gray-700 leading-relaxed max-w-xl">
                    Navigate your international education journey with confidence. From university selection to visa approval, we're with you every step of the way.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-2xl bg-gradient-to-r from-primary-600 to-primary-500 text-white text-lg font-semibold shadow-glass-lg hover:shadow-glass-xl hover:scale-[1.02] transition-all duration-300">
                        Start Your Journey
                        <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                    <a href="{{ route('public.universities') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-2xl glass-light text-gray-700 text-lg font-semibold hover:shadow-glass transition-all duration-300">
                        Explore Universities
                        <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </a>
                </div>

                <!-- Enhanced Trust Indicators -->
                <div class="grid grid-cols-3 gap-6 pt-8">
                    <div class="text-center lg:text-left">
                        <div class="text-4xl font-bold bg-gradient-to-r from-primary-600 to-primary-500 bg-clip-text text-transparent">500+</div>
                        <div class="text-sm font-medium text-gray-600 mt-1.5">Partner Universities</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-4xl font-bold bg-gradient-to-r from-accent-600 to-accent-500 bg-clip-text text-transparent">50+</div>
                        <div class="text-sm font-medium text-gray-600 mt-1.5">Study Destinations</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-4xl font-bold bg-gradient-to-r from-primary-600 to-primary-500 bg-clip-text text-transparent">95%</div>
                        <div class="text-sm font-medium text-gray-600 mt-1.5">Visa Success Rate</div>
                    </div>
                </div>
            </div>

            <!-- Hero Visual with Sophisticated Cards -->
            <div class="relative animate-fade-in-down">
                <div class="grid grid-cols-2 gap-5">
                    <!-- Card 1: University Access -->
                    <div class="glass-light rounded-3xl p-7 shadow-glass-lg hover:shadow-glass-xl transition-all duration-500 hover:-translate-y-2 group">
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-primary-500 to-primary-600 mb-5 group-hover:scale-110 transition-transform duration-300 shadow-glass">
                            <svg class="h-9 w-9 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Elite Universities</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">Connect with world-renowned institutions across the globe</p>
                    </div>

                    <!-- Card 2: Expert Counseling -->
                    <div class="glass-light rounded-3xl p-7 shadow-glass-lg hover:shadow-glass-xl transition-all duration-500 hover:-translate-y-2 mt-12 group">
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-accent-500 to-accent-600 mb-5 group-hover:scale-110 transition-transform duration-300 shadow-glass">
                            <svg class="h-9 w-9 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Expert Guidance</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">Personalized counseling from experienced advisors</p>
                    </div>

                    <!-- Card 3: Visa Success -->
                    <div class="glass-light rounded-3xl p-7 shadow-glass-lg hover:shadow-glass-xl transition-all duration-500 hover:-translate-y-2 group">
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-primary-600 to-primary-700 mb-5 group-hover:scale-110 transition-transform duration-300 shadow-glass">
                            <svg class="h-9 w-9 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Visa Assistance</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">End-to-end support for your visa application</p>
                    </div>

                    <!-- Card 4: Financial Aid -->
                    <div class="glass-light rounded-3xl p-7 shadow-glass-lg hover:shadow-glass-xl transition-all duration-500 hover:-translate-y-2 mt-12 group">
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-accent-600 to-accent-700 mb-5 group-hover:scale-110 transition-transform duration-300 shadow-glass">
                            <svg class="h-9 w-9 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Scholarships</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">Unlock financial aid and scholarship opportunities</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section with Content-Rich Design -->
<section class="py-24 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20 animate-fade-in-up">
            <span class="inline-block px-4 py-2 rounded-full bg-primary-100 text-primary-700 text-sm font-semibold mb-4">
                What We Offer
            </span>
            <h2 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                Comprehensive Study Abroad
                <span class="block mt-2 bg-gradient-to-r from-primary-600 to-accent-600 bg-clip-text text-transparent">Services</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                From initial consultation to post-arrival support, we provide end-to-end assistance for your international education journey. Our expert team ensures every step is smooth and successful.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @forelse($services as $service)
            <div class="glass-light rounded-3xl p-8 shadow-glass hover:shadow-glass-xl transition-all duration-500 hover:-translate-y-2 group animate-scale-in">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-primary-500 to-primary-600 mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-glass">
                    <svg class="h-9 w-9 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $service->name }}</h3>
                <p class="text-gray-600 mb-6 line-clamp-3 leading-relaxed">{{ $service->description }}</p>
                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div>
                        <span class="text-3xl font-bold bg-gradient-to-r from-primary-600 to-primary-500 bg-clip-text text-transparent">
                            ${{ number_format($service->price) }}
                        </span>
                    </div>
                    <a href="{{ route('public.service.detail', $service->slug) }}" class="inline-flex items-center text-sm font-semibold text-primary-600 hover:text-primary-700 transition-colors duration-200 group-hover:translate-x-1">
                        Learn More
                        <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-16">
                <div class="glass-light rounded-3xl p-12 inline-block">
                    <svg class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-gray-600 text-lg">New services coming soon</p>
                </div>
            </div>
            @endforelse
        </div>

        <div class="text-center">
            <a href="{{ route('public.services') }}" class="inline-flex items-center px-8 py-4 rounded-2xl glass-light text-gray-700 text-lg font-semibold hover:shadow-glass transition-all duration-300 group">
                Explore All Services
                <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Featured Universities Section -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20 animate-fade-in-up">
            <span class="inline-block px-4 py-2 rounded-full bg-accent-100 text-accent-700 text-sm font-semibold mb-4">
                Top Destinations
            </span>
            <h2 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                World-Class
                <span class="block mt-2 bg-gradient-to-r from-accent-600 to-primary-600 bg-clip-text text-transparent">Universities</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Partner with globally recognized institutions that offer exceptional academic programs, cutting-edge research facilities, and vibrant international communities.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @forelse($featuredUniversities as $university)
            <div class="glass-light rounded-3xl overflow-hidden shadow-glass hover:shadow-glass-xl transition-all duration-500 hover:-translate-y-2 group animate-fade-in-up">
                <div class="h-56 bg-gradient-to-br from-primary-500 via-primary-600 to-accent-600 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="h-24 w-24 text-white/20 group-hover:scale-110 transition-transform duration-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/>
                        </svg>
                    </div>
                    @if($university->is_featured)
                    <div class="absolute top-4 right-4">
                        <span class="inline-flex items-center px-3 py-1.5 rounded-xl bg-white/95 backdrop-blur-sm text-accent-700 text-xs font-bold shadow-glass">
                            <svg class="h-3.5 w-3.5 mr-1.5 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            Featured
                        </span>
                    </div>
                    @endif
                </div>
                <div class="p-7">
                    <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">{{ $university->name }}</h3>
                    <div class="flex items-center text-sm text-gray-600 mb-4">
                        <svg class="h-5 w-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="font-medium">{{ $university->city }}, {{ $university->country }}</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6 line-clamp-3 leading-relaxed">{{ $university->description }}</p>
                    <a href="{{ route('public.university.detail', $university->slug) }}" class="inline-flex items-center justify-center w-full px-6 py-3.5 rounded-xl bg-gradient-to-r from-primary-600 to-primary-500 text-white font-semibold hover:shadow-glass-lg hover:scale-[1.02] transition-all duration-300 group">
                        View Details
                        <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-16">
                <div class="glass-light rounded-3xl p-12 inline-block">
                    <svg class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/>
                    </svg>
                    <p class="text-gray-600 text-lg">University partnerships coming soon</p>
                </div>
            </div>
            @endforelse
        </div>

        <div class="text-center">
            <a href="{{ route('public.universities') }}" class="inline-flex items-center px-8 py-4 rounded-2xl glass-light text-gray-700 text-lg font-semibold hover:shadow-glass transition-all duration-300 group">
                Discover All Universities
                <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Statistics Section with Professional Design -->
<section class="py-24 relative overflow-hidden bg-gradient-to-br from-primary-600 via-primary-700 to-accent-700">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjA1IiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-40"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
                Our Impact in Numbers
            </h2>
            <p class="text-xl text-white/90 max-w-2xl mx-auto">
                Trusted by thousands of students worldwide to achieve their international education dreams
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            <div class="text-center animate-fade-in-up glass-light/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
                <div class="text-6xl lg:text-7xl font-bold text-white mb-3 bg-gradient-to-br from-white to-white/80 bg-clip-text text-transparent">
                    500+
                </div>
                <div class="text-lg font-semibold text-white/95 mb-2">Partner Universities</div>
                <p class="text-sm text-white/75">Across all major continents</p>
            </div>

            <div class="text-center animate-fade-in-up animation-delay-100 glass-light/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
                <div class="text-6xl lg:text-7xl font-bold text-white mb-3 bg-gradient-to-br from-accent-200 to-accent-100 bg-clip-text text-transparent">
                    10K+
                </div>
                <div class="text-lg font-semibold text-white/95 mb-2">Students Placed</div>
                <p class="text-sm text-white/75">Successfully enrolled worldwide</p>
            </div>

            <div class="text-center animate-fade-in-up animation-delay-200 glass-light/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
                <div class="text-6xl lg:text-7xl font-bold text-white mb-3 bg-gradient-to-br from-white to-white/80 bg-clip-text text-transparent">
                    50+
                </div>
                <div class="text-lg font-semibold text-white/95 mb-2">Study Destinations</div>
                <p class="text-sm text-white/75">Countries represented</p>
            </div>

            <div class="text-center animate-fade-in-up animation-delay-300 glass-light/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
                <div class="text-6xl lg:text-7xl font-bold text-white mb-3 bg-gradient-to-br from-accent-200 to-accent-100 bg-clip-text text-transparent">
                    95%
                </div>
                <div class="text-lg font-semibold text-white/95 mb-2">Visa Success Rate</div>
                <p class="text-sm text-white/75">Industry-leading approval rate</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section with Enhanced Design -->
<section class="py-24 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20 animate-fade-in-up">
            <span class="inline-block px-4 py-2 rounded-full bg-primary-100 text-primary-700 text-sm font-semibold mb-4">
                Success Stories
            </span>
            <h2 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                What Our Students
                <span class="block mt-2 bg-gradient-to-r from-accent-600 to-primary-600 bg-clip-text text-transparent">Achieve</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Real stories from students who transformed their futures through international education with our expert guidance and unwavering support.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="glass-light rounded-3xl p-8 shadow-glass hover:shadow-glass-xl transition-all duration-500 hover:-translate-y-2 animate-fade-in-up group">
                <div class="flex items-center mb-6">
                    <div class="flex-shrink-0 mr-4">
                        <div class="h-16 w-16 rounded-full bg-gradient-to-br from-primary-500 to-primary-600 flex items-center justify-center text-white text-xl font-bold shadow-glass group-hover:scale-110 transition-transform duration-300">
                            JD
                        </div>
                    </div>
                    <div>
                        <div class="text-lg font-bold text-gray-900">John Doe</div>
                        <div class="text-sm font-medium text-gray-600">Harvard University</div>
                    </div>
                </div>
                <div class="flex mb-4">
                    @for($i = 0; $i < 5; $i++)
                    <svg class="h-5 w-5 text-accent-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <p class="text-gray-600 italic leading-relaxed">"FlyHigh CRM made my dream of studying at Harvard a reality. Their expert guidance throughout the application process was invaluable. The personalized attention and detailed support at every step made all the difference."</p>
            </div>

            <!-- Testimonial 2 -->
            <div class="glass-light rounded-3xl p-8 shadow-glass hover:shadow-glass-xl transition-all duration-500 hover:-translate-y-2 animate-fade-in-up animation-delay-100 group">
                <div class="flex items-center mb-6">
                    <div class="flex-shrink-0 mr-4">
                        <div class="h-16 w-16 rounded-full bg-gradient-to-br from-accent-500 to-accent-600 flex items-center justify-center text-white text-xl font-bold shadow-glass group-hover:scale-110 transition-transform duration-300">
                            ES
                        </div>
                    </div>
                    <div>
                        <div class="text-lg font-bold text-gray-900">Emma Smith</div>
                        <div class="text-sm font-medium text-gray-600">Oxford University</div>
                    </div>
                </div>
                <div class="flex mb-4">
                    @for($i = 0; $i < 5; $i++)
                    <svg class="h-5 w-5 text-accent-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <p class="text-gray-600 italic leading-relaxed">"Outstanding service! The team's knowledge of the UK admission process was exceptional. I'm now pursuing my Master's at Oxford thanks to their comprehensive support and insider knowledge of the application requirements."</p>
            </div>

            <!-- Testimonial 3 -->
            <div class="glass-light rounded-3xl p-8 shadow-glass hover:shadow-glass-xl transition-all duration-500 hover:-translate-y-2 animate-fade-in-up animation-delay-200 group">
                <div class="flex items-center mb-6">
                    <div class="flex-shrink-0 mr-4">
                        <div class="h-16 w-16 rounded-full bg-gradient-to-br from-primary-600 to-primary-700 flex items-center justify-center text-white text-xl font-bold shadow-glass group-hover:scale-110 transition-transform duration-300">
                            MJ
                        </div>
                    </div>
                    <div>
                        <div class="text-lg font-bold text-gray-900">Michael Johnson</div>
                        <div class="text-sm font-medium text-gray-600">MIT</div>
                    </div>
                </div>
                <div class="flex mb-4">
                    @for($i = 0; $i < 5; $i++)
                    <svg class="h-5 w-5 text-accent-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <p class="text-gray-600 italic leading-relaxed">"Professional, efficient, and caring. FlyHigh CRM helped me secure both admission and a full scholarship at MIT. Their dedication to my success was evident in every interaction. Forever grateful for their exceptional support!"</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section with Professional Design -->
<section class="py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-accent-600 via-accent-700 to-primary-700"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjA1IiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-30"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center animate-fade-in-up">
            <span class="inline-block px-4 py-2 rounded-full bg-white/20 backdrop-blur-sm text-white text-sm font-semibold mb-6">
                Start Today
            </span>
            <h2 class="text-4xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Ready to Begin Your
                <span class="block mt-2">International Education Journey?</span>
            </h2>
            <p class="text-xl lg:text-2xl text-white/95 mb-12 max-w-3xl mx-auto leading-relaxed">
                Join thousands of successful students who achieved their dreams of studying abroad. Our expert team is ready to guide you from application to arrival.
            </p>

            <div class="flex flex-col sm:flex-row gap-5 justify-center mb-16">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-10 py-5 rounded-2xl bg-white text-primary-700 text-lg font-bold shadow-glass-xl hover:shadow-glass-xl hover:scale-[1.02] transition-all duration-300 group">
                    Schedule Free Consultation
                    <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </a>
                <a href="{{ route('public.programs') }}" class="inline-flex items-center justify-center px-10 py-5 rounded-2xl bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white text-lg font-bold hover:bg-white/20 transition-all duration-300 group">
                    Explore Programs
                    <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>

            <!-- Value Props -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="glass-light/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="flex items-center justify-center mb-3">
                        <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Free Consultation</h3>
                    <p class="text-sm text-white/80">No obligation assessment of your profile</p>
                </div>

                <div class="glass-light/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="flex items-center justify-center mb-3">
                        <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">24/7 Support</h3>
                    <p class="text-sm text-white/80">Round-the-clock assistance whenever you need</p>
                </div>

                <div class="glass-light/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="flex items-center justify-center mb-3">
                        <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Expert Advisors</h3>
                    <p class="text-sm text-white/80">Experienced counselors with proven track records</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
